
<style>
body {
    height: 100%;
    background: linear-gradient(
        180deg,
        rgba(0, 41, 255, 0.02) 0%,
        rgba(0, 41, 255, 0) 100%
    );
  
}
label,
input,
textarea {
    display: block;
    width: 100%;
}
ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

li {
    padding: 0.3em;
}
span {
    font-weight: 700;
    color: #102a43;
    line-height: 35px;
    line-height: 2.5rem;
    font-size: 12px;
    font-size: 0.8rem;
    text-transform: uppercase;
}
input[type="submit"] {
    background: #fc4366;
    color: white;
    font-weight: 700;
    font-size: 1.2rem;
    border-radius: 5px;
    margin-top: 1.3em;
}

.container {
    width: 460px;
    margin: 5em auto;
}
form {
    background-color: #ffffff;
    padding-top: 40px;
    padding-right: 40px;
    padding-bottom: 40px;
    padding-left: 40px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    border-radius: 3px;
    overflow: hidden;
}

.required-star {
    color: #fc4366;
}

input,
textarea {
    width: 100%;
    padding: 9px 20px;
    border: 1px solid #e1e2eb;
    background-color: #fff;
    color: #102a43;
    caret-color: #829ab1;
    box-sizing: border-box;
    font-size: 14px;
    font-size: 1rem;
    line-height: 29px;
    line-height: 2rem;
    box-shadow: inset 0 2px 4px 0 rgba(206, 209, 224, 0.2);
    border-radius: 3px;
    line-height: 29px;
    line-height: 2rem;
}

</style>

<div class="container">
    <form>
        <ul>
            <li>
                <label for="name"><span>Name <span class="required-star">*</span></span></label>
                <input type="text" id="name" name="user_name">
            </li>
            <li>
                <label for="mail"><span>Email <span class="required-star">*</span></span></label>
                <input type="email" id="mail" name="user_email">
            </li>
            <li>
                <label for="msg"><span>Message</span></label>
                <textarea rows="4" cols="50"></textarea>
            </li>
            <li>
                <input type="submit">
            </li>
        </ul>
    </form>
</div>