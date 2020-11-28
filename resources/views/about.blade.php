
<style>
    .about{
        width:100%;
        height: 350px;
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
    url(https://images.unsplash.com/photo-1488998427799-e3362cec87c3?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1500&q=80);
        background-size: cover;
        background-position: center;
        position: relative;;
    }
    .title{
        font-size: 50px;
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%,-50%);
        color:#fff;
    }
    .content{
        background: #eee;
        padding: 50px 20px;
        border-bottom: 5px solid yellow;
        text-align: center;

    }
    .content h2 span{
        color:darkgoldenrod;

    }
</style>
<div class="about">
    <h1 class="title">About me</h1>
</div>

<div class="content">
<h2 >My name is: <span>{{$name}}</span> </h2>
    <h2 >I am a: <span>{{$job}}</span> </h2>
    <h2 >I live in: <span>{{$city}}</span> </h2>
    <hr>
    <h2>My Works</h2>
    <a href="https://imaar.net/">Imaar Training & development</a><br><br>
    <a href="https://jasminaid.dk/">Danish Jasmin aid</a><br><br>
    <a href="https://canadian-academy.org/">canadian-academy</a><br><br>
</div>