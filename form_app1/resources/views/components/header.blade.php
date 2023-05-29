<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <header>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="about">About</a></li>
            <li id="login"><a href="login">Login/Sign Up</a></li>
        </ul>
    </header>
</div>

<style>
    body{
        background-color: #f1f1f1;
        padding: 0;
        margin: 0;
        overflow-x hidden;
        text-align: center;
    }

    header{
            background-color: #fff;
            padding:15px;
            box-shadow: 0 0 3px #000;
    }

    header li {
        display: inline ;
        padding-left: 45px;
    }

    header li a {
        color: #333;
        text-decoration: none;
        padding: 13px;
        transition: .3s ease;
    }
    
    header li a:hover {
        color: royalblue;
    }

    header ul #login a {
        background-color: royalblue;
        color: #fff;
        border-radius: 30px;
        float:right;
        position: relative;
        top: -15;
        transition: .3s ease;
    }

    
    header ul #login a:hover {
        background-color: goldenrod;
    }

</style>