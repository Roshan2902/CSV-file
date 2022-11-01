<style type="text/css">
    html{
        scroll-behavior: smooth;
    }

*{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif; }

.nav_style{
    background-color: aqua;
}
.nav_style a{
    color: black;
}

/* ============ Main-Header ============= */
.main_header{
    height: 450px;
    width: 100%;
}
.row{
    margin-left: 0!important; 
    padding: 0; margin-right: 0!important;
}
.leftside{
    margin-top: 30px;
}

.rightside h1{
    font-size: 3rem;
    margin-top:100px ;
}

.corona_rotat img{
    animation: coronaa 3s linear infinite;
}
@-webkit-keyframes coronaa {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes coronaa {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.leftside img{
   animation: group 5s linear infinite;
}
@keyframes group{
    0%{transform: scale(.75);} 
    20%{transform: scale(1);} 
    40%{transform: scale(.75);} 
    60%{transform: scale(1);} 
    80%{transform: scale(.75);} 
    100%{transform: scale(1);} 

}

/* ==========Corona updates========== */

.corona_update{
    margin:0 0 30px 0 ;
}
.corona_update h3{
    color: chartreuse;
}
.corona_update h1{
    font-size:2rem ;
    text-align: center;
}

/* ============About section=========== */

.sub_section{
    background-color:rgb(238, 233, 227);
}
.about_res{
    margin-left: 0!important;
}

/* ==========contact us============ */

.container-color{
    background-color: ghostwhite;
}
.form-check{
    float: left;
    margin: 3px 4px 3px 4px;
}
.textarea{
    padding-top: 50px;
}
.color{
    background-color: dimgrey;
}

/* ========script_section======== */

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

/* ========footer=========== */

.footer_style{
    background-color: cornsilk;

}
.footer_style p{
    margin-bottom: 0;
}

/* ===========Responsive========= */

@media(max-width:768px)
{
    .main-header{height:700px; text-align: center;}
    .main_header h1
    {
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 34px;

    }
}










/* ============ For Mobile ============= */

@media only screen and (max-width:775px)
{
   body{ 
        /* background-color: rgb(128, 128, 199); */
   }
   .corona_update{
       margin-top: 200px;
   }
}


</style>