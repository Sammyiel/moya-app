function showChat() {
    document.getElementById("chat-screen").style.visibility = "visible";
}

function showProfile() {
    document.getElementById("show-profile").style.visibility = "visible";
    document.getElementById("chat-screen").style.visibility = "hidden";
}

function hideProfile() {
    document.getElementById("show-profile").style.visibility = "hidden";
    document.getElementById("chat-screen").style.visibility = "visible";
}

$(document).ready(function() {
    if (document.getElementById("chat-screen").style.visibility = "visible") {
        document.getElementById("show-profile").style.visibility = "hidden";
    } else if (document.getElementById("chat-screen").style.visibility = "hidden") {
        document.getElementById("show-profile").style.visibility = "visible";
    }
})

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
}

// For chats
var ChatRoom = (function(app) {
    function Contact(name, img, online) {
        this.id = contactList.length;
        this.name = name;
        this.img = img;
        this.online = online;
        this.messages = new Array();
        this.newmsg = 0;
        this.groups = new Array();

        contactList.push(this);
    }

    Contact.prototype.addMessage = function(msg) {
        this.messages.push(msg);
    }

    Contact.prototype.addGroup = function(group) {
        this.groups.push(group);
    }

    appContacts = Contact;
    return appContacts;
})(ChatRoom || {});

//Below is for groups

// var ChatRoom = (function(app) {
//     function Group(name, img) {
//         this.id = contactList.length;
//         this.name = name;
//         this.img = img;
//         this.members = new Array();
//         this.messages = new Array();
//         this.newmsg = 0;

//         contactList.push(this);
//     }

//     Group.prototype.addMember = function(contact) {
//         this.members.push(contact);
//     }

//     Group.prototype.addMessage = function(msg) {
//         this.messages.push(msg);
//     }

//     appGroups = Group;
//     return appGroups;

// })(ChatRoom || {});

//messages
var ChatRoom = (function(app) {
    function Message(text, name, time, type, group) {
        this.text = text;
        this.name = name,
            this.time = time;
        this.type = type;
        this.group = group;
    }

    appMessages = Message;
    return appMessages;
})(ChatRoom || {});

var ChatRoom = (function(app) {

    function Subject() {
        this.observers = [];
    };

    Subject.prototype.subscribe = function(item) {
        this.observers.push(item);
    };

    Subject.prototype.unsubscribeAll = function() {
        this.observers.length = 0;
    };

    Subject.prototype.notifyObservers = function() {
        this.observers.forEach(elem => {
            elem.notify();
        })
    };

    app.Subject = Subject;
    return app;

})(ChatRoom || {});

var currentChat;
var contactList = new Array();

var ChatRoom = (function ToDoModel(app) {
    var subject = new app.Subject();

    var Model = {
        start: function() {
            // JSON CHATS ARE AVAILABLE HERE FOR DUMMY DATA
            $.getJSON("http://localhost/chats2.txt", function(data) {
                for (var i = 0; i < data.chats.length; i++) {
                    var e = data.chats[i];
                    var contact = new appContacts(e.name, e.img, e.online);
                    for (var j = 0; j < e.messages.length; j++) {
                        var m = e.messages[j];
                        var message = new appMessages(m.text, m.name, m.time, m.type, false);
                        contact.addMessage(message);

                        // console.log(m.text);

                        // $.ajax({
                        //     url: "http://localhost/chats2.txt",
                        //     method: "get",
                        //     data: message.chatop,
                        //     success: function(response) {
                        //         console.log(response);
                        //     }
                        // })
                    }
                }
                subject.notifyObservers();
            });
        },
        writeMessage: function() {
            var msg = new appMessages($(".input-message").val(), "", new Date().getHours() + ":" + new Date().getMinutes(), true);

            // var current = new Date();
            // var mins = current.getMinutes();
            // if (mins > 10) { slideIndex }
            // console.log(current.getHours() + ":" + mins);

            // console.log(msg.text)
            // console.log(msg.time)
            // console.log(msg.name)
            // console.log(msg.type)

            $.ajax({
                url: "/training/Crud/savedata",
                method: "post",
                data: msg
            })

            ChatRoom.View.printMessage(msg);
            currentChat.addMessage(msg);
            $(".input-message").val("");
            $("#" + currentChat.id).addClass("active-contact");
            subject.notifyObservers();
        },
        getMessage: function(text, id, name) {
            if (name == undefined) {
                var msg = new appMessages(text, contactList[id].name, new Date().getHours() + ":" + new Date().getMinutes(), false, false);
            } else {
                var msg = new appMessages(text, name, new Date().getHours() + ":" + new Date().getMinutes(), false, true);
            }
            contactList[id].addMessage(msg);
            contactList[id].online = new Date().getHours() + ":" + new Date().getMinutes();

            if (contactList[id] == currentChat) {
                ChatRoom.View.printMessage(msg);
                ChatRoom.View.printContact(contactList[id]);
            } else {
                contactList[id].newmsg++;
                ChatRoom.View.printContact(contactList[id]);
            }
        },
        register: function(...args) {
            subject.unsubscribeAll();
            args.forEach(elem => {
                subject.subscribe(elem);
            })
        }
    };
    app.Model = Model;
    return app;

})(ChatRoom || {});

var first = true;

var ChatRoom = (function ToDoView(app) {
    var view = {
        printContact: function(c) {
            $("#" + c.id).remove();
            var lastmsg = c.messages[c.messages.length - 1];

            if (c.newmsg == 0) {
                var html = $("<div class='contact' id='" + c.id + "'><img src='" + c.img + "' alt='profilpicture'><div class='contact-preview'><div class='contact-text'><h1 class='font-name'>" + c.name + "</h1><p class='font-preview'>" + lastmsg.text + "</p></div></div><div class='contact-time'><p>" + lastmsg.time + "</p></div></div>");
            } else {
                var html = $("<div class='contact new-message-contact' id='" + c.id + "'><img src='" + c.img + "' alt='profilpicture'><div class='contact-preview'><div class='contact-text'><h1 class='font-name'>" + c.name + "</h1><p class='font-preview'>" + lastmsg.text + "</p></div></div><div class='contact-time'><p>" + lastmsg.time + "</p><div class='new-message' id='nm" + c.id + "'><p>" + c.newmsg + "</p></div></div></div>");
            }

            var that = c;
            $(".contact-list").prepend(html);
            ChatRoom.Ctrl.addClick(html, that);
        },
        printChat: function(cg) {
            ChatRoom.View.closeContactInformation();
            $(".chat-head img").attr("src", cg.img);
            $(".chat-name h1").text(cg.name);
            if (cg.members == undefined) {
                $(".chat-name p").text("Last online " + cg.online);
                $(".chat-bubble").remove();
                for (var i = 0; i < cg.messages.length; i++) {
                    ChatRoom.View.printMessage(cg.messages[i]);
                }
                currentChat = cg;
            } else {
                var listMembers = "";
                for (var i = 0; i < cg.members.length; i++) {
                    listMembers += cg.members[i].name;
                    if (i < cg.members.length - 1) {
                        listMembers += ", ";
                    }
                }
                $(".chat-name p").text(listMembers);
                $(".chat-bubble").remove();
                for (var i = 0; i < cg.messages.length; i++) {
                    ChatRoom.View.printMessage(cg.messages[i]);
                }
                currentChat = cg;
            }
        },
        printMessage: function(gc) {
            // $.ajax({
            //     type: "POST",
            //     url: "<?php echo base_url();?>login/addToDatabase",
            //     dataType: 'json',
            //     data: postData,
            //     contentType: "application/json; charset=utf-8",
            //     cache: false,
            // success: function(response) {
            //     addRecordToTable(response.data);
            // }
            // });
            // method="post" action="<?php echo base_url();?>login/login"
            // if (gc.group) {
            //     if (gc.type) {
            //         $(".chat").append("<div class='chat-bubble me'><div class='my-mouth'></div><div class='content' name='text'>" + gc.text + "</div><div class='time' name='time'>" + gc.time + "</div></div>");
            //     } else {
            //         $(".chat").append("<div class='chat-bubble you'><div class='your-mouth'></div><h4>" + gc.name + "</h4><div class='content' name='text'>" + gc.text + "</div><div class='time' name='time'>" + gc.time + "</div></div>");
            //     }
            // } 

            if (gc.type) {
                $(".chat").append("<div class='chat-bubble me'><div class='my-mouth'></div><div class='content' name='text'>" + gc.text + "</div><div class='time' name='time'>" + gc.time + "</div></div>");
            } else {
                $(".chat").append("<div class='chat-bubble you'><div class='your-mouth'></div><div class='content' name='text'>" + gc.text + "</div><div class='time' name='time'>" + gc.time + "</div></div>");
            }

        },
        showContactInformation: function() {
            $(".chat-head i").hide();
            $(".information").css("display", "flex");
            $("#close-contact-information").show();
            if (currentChat.members == undefined) {
                $(".information").append("<img src='" + currentChat.img + "'><div><h1>Name:</h1><p>" + currentChat.name + "</p></div><div id='listGroups'><h1>Gemeinsame Gruppen:</h1></div>");
                for (var i = 0; i < currentChat.groups.length; i++) {
                    html = $("<div class='listGroups'><img src='" + currentChat.groups[i].img + "'><p>" + currentChat.groups[i].name + "</p></div>");
                    $("#listGroups").append(html);
                    $(html).click(function(e) {
                        for (var i = 0; i < contactList.length; i++) {
                            if (($(currentChat).find("p").text()) == contactList[i].name) {
                                $(".active-contact").removeClass("active-contact");
                                $("#" + contactList[i].id).addClass("active-contact");
                                ChatRoom.Groups.printChat(contactList[i]);
                            }
                        }
                    });
                }
            } else {
                $(".information").append("<img src='" + currentChat.img + "'><div><h1>Name:</h1><p>" + currentChat.name + "</p></div><div id='listGroups'><h1>Mitglieder:</h1></div>");
                for (var i = 0; i < currentChat.members.length; i++) {
                    html = $("<div class='listGroups'><img src='" + currentChat.members[i].img + "'><p>" + currentChat.members[i].name + "</p></div>");
                    $("#listGroups").append(html);
                    $(html).click(function(e) {
                        for (var i = 0; i < contactList.length; i++) {
                            if (($(currentChat).find("p").text()) == contactList[i].name) {
                                $(".active-contact").removeClass("active-contact");
                                $("#" + contactList[i].id).addClass("active-contact");
                                ChatRoom.Contacts.printChat(contactList[i]);
                            }
                        }
                    });
                }
            }
        },
        closeContactInformation: function() {
            $(".chat-head i").show();
            $("#close-contact-information").hide();
            $(".information >").remove();
            $(".information").hide();
        },

        notify: function() {
            if (first) {
                first = false;
                for (var i = 0; i < contactList.length; i++) {
                    ChatRoom.View.printContact(contactList[i]);
                    currentChat = contactList[i];
                }
                first = false;
            } else {
                ChatRoom.View.printContact(currentChat);
            }
        }
    }

    app.View = view;
    return app;

})(ChatRoom);

var start = true;

var ChatRoom = (function ToDoCtrl(app) {

    $(document).ready(function() {
        app.Model.start();
    });

    var Ctrl = {
        addClick: function(html, that) {
            $(html).click(function(e) {
                $(".active-contact").removeClass("active-contact");
                $(this).addClass("active-contact");
                $(this).removeClass("new-message-contact");
                $("#nm" + that.id).remove();
                that.newmsg = 0;
                ChatRoom.View.printChat(that);
            });
        },

        notify: function() {
            if (start) {
                $(".input-message").keyup(function(ev) {
                    if (ev.which == 13 || ev.keyCode == 13) {
                        app.Model.writeMessage();
                    }
                });

                $("#show-contact-information").on("click", function() {
                    ChatRoom.View.showContactInformation();
                });

                $("#close-contact-information").on("click", function() {
                    ChatRoom.View.closeContactInformation();
                });
                start = false;
            }
        }
    };
    app.Ctrl = Ctrl;
    return app;

})(ChatRoom);

ChatRoom.Model.register(ChatRoom.View, ChatRoom.Ctrl);

! function() {
    function a(a) {
        var b, c = [],
            d = document,
            e = d.documentElement.doScroll,
            f = "DOMContentLoaded",
            g = (e ? /^loaded|^c/ : /^loaded|^i|^c/).test(d.readyState);
        g || d.addEventListener(f, b = function() { for (d.removeEventListener(f, b), g = 1; b = c.shift();) b() }), g ? setTimeout(a, 0) : c.push(a)
    }

    function b(a, b) {
        var c = !1;
        return a.split(",").forEach(function(a) {
            var d = new RegExp(a.trim().replace(".", "\\.").replace("*", "(.*)"));
            b.match(d) && (c = !0)
        }), c
    }

    function c(a) { "undefined" != typeof MutationObserver && new MutationObserver(a).observe(document, { childList: !0, subtree: !0 }) }

    function d(a) {
        var b, c, d, e;
        a = a || "fa", b = document.querySelectorAll("." + a), Array.prototype.forEach.call(b, function(a) { c = a.getAttribute("title"), a.setAttribute("aria-hidden", "true"), d = a.nextElementSibling ? !a.nextElementSibling.classList.contains("sr-only") : !0, c && d && (e = document.createElement("span"), e.innerHTML = c, e.classList.add("sr-only"), a.parentNode.insertBefore(e, a.nextSibling)) })
    }! function() {
        "use strict";

        function a(a) { l.push(a), 1 == l.length && k() }

        function b() { for (; l.length;) l[0](), l.shift() }

        function c(a) { this.a = m, this.b = void 0, this.f = []; var b = this; try { a(function(a) { f(b, a) }, function(a) { g(b, a) }) } catch (c) { g(b, c) } }

        function d(a) { return new c(function(b, c) { c(a) }) }

        function e(a) { return new c(function(b) { b(a) }) }

        function f(a, b) {
            if (a.a == m) {
                if (b == a) throw new TypeError;
                var c = !1;
                try { var d = b && b.then; if (null != b && "object" == typeof b && "function" == typeof d) return void d.call(b, function(b) { c || f(a, b), c = !0 }, function(b) { c || g(a, b), c = !0 }) } catch (e) { return void(c || g(a, e)) }
                a.a = 0, a.b = b, h(a)
            }
        }

        function g(a, b) {
            if (a.a == m) {
                if (b == a) throw new TypeError;
                a.a = 1, a.b = b, h(a)
            }
        }

        function h(b) {
            a(function() {
                if (b.a != m)
                    for (; b.f.length;) {
                        var a = b.f.shift(),
                            c = a[0],
                            d = a[1],
                            e = a[2],
                            a = a[3];
                        try { 0 == b.a ? e("function" == typeof c ? c.call(void 0, b.b) : b.b) : 1 == b.a && ("function" == typeof d ? e(d.call(void 0, b.b)) : a(b.b)) } catch (f) { a(f) }
                    }
            })
        }

        function i(a) {
            return new c(function(b, c) {
                function d(c) { return function(d) { g[c] = d, f += 1, f == a.length && b(g) } }
                var f = 0,
                    g = [];
                0 == a.length && b(g);
                for (var h = 0; h < a.length; h += 1) e(a[h]).c(d(h), c)
            })
        }

        function j(a) { return new c(function(b, c) { for (var d = 0; d < a.length; d += 1) e(a[d]).c(b, c) }) }
        var k, l = [];
        k = function() { setTimeout(b) };
        var m = 2;
        c.prototype.g = function(a) { return this.c(void 0, a) }, c.prototype.c = function(a, b) { var d = this; return new c(function(c, e) { d.f.push([a, b, c, e]), h(d) }) }, window.Promise || (window.Promise = c, window.Promise.resolve = e, window.Promise.reject = d, window.Promise.race = j, window.Promise.all = i, window.Promise.prototype.then = c.prototype.c, window.Promise.prototype["catch"] = c.prototype.g)
    }(),
    function() {
        function a(a) { this.el = a; for (var b = a.className.replace(/^\s+|\s+$/g, "").split(/\s+/), c = 0; c < b.length; c++) d.call(this, b[c]) }

        function b(a, b, c) { Object.defineProperty ? Object.defineProperty(a, b, { get: c }) : a.__defineGetter__(b, c) }
        if (!("undefined" == typeof window.Element || "classList" in document.documentElement)) {
            var c = Array.prototype,
                d = c.push,
                e = c.splice,
                f = c.join;
            a.prototype = {
                add: function(a) { this.contains(a) || (d.call(this, a), this.el.className = this.toString()) },
                contains: function(a) { return -1 != this.el.className.indexOf(a) },
                item: function(a) { return this[a] || null },
                remove: function(a) {
                    if (this.contains(a)) {
                        for (var b = 0; b < this.length && this[b] != a; b++);
                        e.call(this, b, 1), this.el.className = this.toString()
                    }
                },
                toString: function() { return f.call(this, " ") },
                toggle: function(a) { return this.contains(a) ? this.remove(a) : this.add(a), this.contains(a) }
            }, window.DOMTokenList = a, b(Element.prototype, "classList", function() { return new a(this) })
        }
    }();
    var e = function(a, b, c) {
            function d(a) { return g.body ? a() : void setTimeout(function() { d(a) }) }

            function e() { h.addEventListener && h.removeEventListener("load", e), h.media = c || "all" }
            var f, g = window.document,
                h = g.createElement("link");
            if (b) f = b;
            else {
                var i = (g.body || g.getElementsByTagName("head")[0]).childNodes;
                f = i[i.length - 1]
            }
            var j = g.styleSheets;
            h.rel = "stylesheet", h.href = a, h.media = "only x", d(function() { f.parentNode.insertBefore(h, b ? f : f.nextSibling) });
            var k = function(a) {
                for (var b = h.href, c = j.length; c--;)
                    if (j[c].href === b) return a();
                setTimeout(function() { k(a) })
            };
            return h.addEventListener && h.addEventListener("load", e), h.onloadcssdefined = k, k(e), h
        },
        f = null;
    ! function() {
        function a(a, b) { document.addEventListener ? a.addEventListener("scroll", b, !1) : a.attachEvent("scroll", b) }

        function b(a) { document.body ? a() : document.addEventListener ? document.addEventListener("DOMContentLoaded", function b() { document.removeEventListener("DOMContentLoaded", b), a() }) : document.attachEvent("onreadystatechange", function c() { "interactive" != document.readyState && "complete" != document.readyState || (document.detachEvent("onreadystatechange", c), a()) }) }

        function c(a) { this.a = document.createElement("div"), this.a.setAttribute("aria-hidden", "true"), this.a.appendChild(document.createTextNode(a)), this.b = document.createElement("span"), this.c = document.createElement("span"), this.h = document.createElement("span"), this.f = document.createElement("span"), this.g = -1, this.b.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;", this.c.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;", this.f.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;", this.h.style.cssText = "display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;", this.b.appendChild(this.h), this.c.appendChild(this.f), this.a.appendChild(this.b), this.a.appendChild(this.c) }

        function d(a, b) { a.a.style.cssText = "max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;left:-999px;white-space:nowrap;font:" + b + ";" }

        function e(a) {
            var b = a.a.offsetWidth,
                c = b + 100;
            return a.f.style.width = c + "px", a.c.scrollLeft = c, a.b.scrollLeft = a.b.scrollWidth + 100, a.g !== b ? (a.g = b, !0) : !1
        }

        function g(b, c) {
            function d() {
                var a = f;
                e(a) && a.a.parentNode && c(a.g)
            }
            var f = b;
            a(b.b, d), a(b.c, d), e(b)
        }

        function h(a, b) {
            var c = b || {};
            this.family = a, this.style = c.style || "normal", this.weight = c.weight || "normal", this.stretch = c.stretch || "normal"
        }

        function i() {
            if (null === l) {
                var a = document.createElement("div");
                try { a.style.font = "condensed 100px sans-serif" } catch (b) {}
                l = "" !== a.style.font
            }
            return l
        }

        function j(a, b) { return [a.style, a.weight, i() ? a.stretch : "", "100px", b].join(" ") }
        var k = null,
            l = null,
            m = null;
        h.prototype.load = function(a, e) {
            var f = this,
                h = a || "BESbswy",
                i = e || 3e3,
                l = (new Date).getTime();
            return new Promise(function(a, e) {
                if (null === m && (m = !!window.FontFace), m) {
                    var n = new Promise(function(a, b) {
                            function c() {
                                (new Date).getTime() - l >= i ? b() : document.fonts.load(j(f, f.family), h).then(function(b) { 1 <= b.length ? a() : setTimeout(c, 25) }, function() { b() })
                            }
                            c()
                        }),
                        o = new Promise(function(a, b) { setTimeout(b, i) });
                    Promise.race([o, n]).then(function() { a(f) }, function() { e(f) })
                } else b(function() {
                    function b() {
                        var b;
                        (b = -1 != q && -1 != r || -1 != q && -1 != s || -1 != r && -1 != s) && ((b = q != r && q != s && r != s) || (null === k && (b = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent), k = !!b && (536 > parseInt(b[1], 10) || 536 === parseInt(b[1], 10) && 11 >= parseInt(b[2], 10))), b = k && (q == t && r == t && s == t || q == u && r == u && s == u || q == v && r == v && s == v)), b = !b), b && (w.parentNode && w.parentNode.removeChild(w), clearTimeout(x), a(f))
                    }

                    function m() {
                        if ((new Date).getTime() - l >= i) w.parentNode && w.parentNode.removeChild(w), e(f);
                        else { var a = document.hidden;!0 !== a && void 0 !== a || (q = n.a.offsetWidth, r = o.a.offsetWidth, s = p.a.offsetWidth, b()), x = setTimeout(m, 50) }
                    }
                    var n = new c(h),
                        o = new c(h),
                        p = new c(h),
                        q = -1,
                        r = -1,
                        s = -1,
                        t = -1,
                        u = -1,
                        v = -1,
                        w = document.createElement("div"),
                        x = 0;
                    w.dir = "ltr", d(n, j(f, "sans-serif")), d(o, j(f, "serif")), d(p, j(f, "monospace")), w.appendChild(n.a), w.appendChild(o.a), w.appendChild(p.a), document.body.appendChild(w), t = n.a.offsetWidth, u = o.a.offsetWidth, v = p.a.offsetWidth, m(), g(n, function(a) { q = a, b() }), d(n, j(f, '"' + f.family + '",sans-serif')), g(o, function(a) { r = a, b() }), d(o, j(f, '"' + f.family + '",serif')), g(p, function(a) { s = a, b() }), d(p, j(f, '"' + f.family + '",monospace'))
                })
            })
        }, f = h
    }();
    var g = {
            observe: function(a, b) {
                for (var c = b.prefix, d = function(a) {
                        var b = a.weight ? "-" + a.weight : "",
                            d = a.style ? "-" + a.style : "",
                            e = a.className ? "-" + a.className : "",
                            g = a.className ? "-" + a.className + b + d : "",
                            h = document.getElementsByTagName("html")[0].classList,
                            i = function(a) { h.add(c + e + "-" + a), h.add(c + g + "-" + a) },
                            j = function(a) { h.remove(c + e + "-" + a), h.remove(c + g + "-" + a) };
                        i("loading"), new f(a.familyName).load(a.testString).then(function() { i("ready"), j("loading") }, function() { i("failed"), j("loading") })
                    }, e = 0; e < a.length; e++) d(a[e])
            }
        },
        h = {
            load: function(a) {
                var b = document.createElement("link");
                b.href = a, b.media = "all", b.rel = "stylesheet", document.getElementsByTagName("head")[0].appendChild(b)
            },
            loadAsync: function(a) { e(a) }
        },
        i = {
            load: function(a) {
                var b = document.createElement("script"),
                    c = document.scripts[0];
                b.src = a, c.parentNode.appendChild(b)
            }
        };
    try {
        if (window.FontAwesomeCdnConfig) {
            var j = window.FontAwesomeCdnConfig,
                k = j.useUrl,
                l = j.faCdnUrl,
                m = j.code,
                n = "FontAwesome",
                o = "fa",
                p = "ï‰€",
                q = d.bind(d, "fa"),
                r = function() {};
            j.autoA11y.enabled && (a(q), c(q)), j.reporting.enabled && b(j.reporting.domains, location.host) && i.load(l + "/js/stats.js"), cssUrl = "https://" + k + "/" + m + ".css", new f(n).load(p).then(function() {
                var a = (window.FontAwesomeHooks || {}).loaded || r;
                a()
            }, r), j.asyncLoading.enabled ? h.loadAsync(cssUrl) : h.load(cssUrl), g.observe([{ familyName: n, testString: p }], { prefix: o + "-events-icons" })
        }
    } catch (s) {}
}();