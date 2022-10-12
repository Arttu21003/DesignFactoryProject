<!DOCTYPE html>
<html lang="en">
<head>

<?php
session_start();
if (!isset($_SESSION["username"])){
    header("Location:../SignUpForm/login.php");
    exit;
}
print "<h2>Welcome, ".$_SESSION["username"]."!</h2>";
?>

<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cool Finland - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">
    <link rel="stylesheet" href="calendar.css">

    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
        .title{
            font-size: 30px;

            /**
* Template Name: Impact - v1.1.0
* Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# Set main reusable colors and fonts using CSS variables
# Learn more about CSS variables at https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties
--------------------------------------------------------------*/
/* Fonts */
:root {
    --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-primary: "Montserrat", sans-serif;
    --font-secondary: "Philosopher", sans-serif;
  }
  
  /* Colors */
  :root {
    --color-default: #070706;
    --color-primary: #f4f8f8;
    --color-secondary: #020202;
  }
  
  /* Smooth scroll behavior */
  :root {
    scroll-behavior: smooth;
  }
  
  /*--------------------------------------------------------------
  # General
  --------------------------------------------------------------*/
  body {
    font-family: var(--font-default);
    color: var(--color-default);
  }
  
  a {
    color: var(--color-primary);
    text-decoration: none;
  }
  
  a:hover {
    color: #f3f5f5;
    text-decoration: none;
  }
  
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: var(--font-primary);
  }
  .e1_19 { 
      background-color:rgba(255, 250.75000405311584, 250.75000405311584, 0.7200000286102295);
      width:1081px;
      height:102px;
      border-top-left-radius:23px;
      border-top-right-radius:23px;
      border-bottom-left-radius:23px;
      border-bottom-right-radius:23px;
  }
  e1_7 { 
      box-shadow:0px 4px 4px rgba(0, 0, 0, 0.25);
      width:1440px;
      height:593px;
      background-repeat:no-repeat;
      background-size:cover;
  }
  
  /*--------------------------------------------------------------
  # Sections & Section Header
  --------------------------------------------------------------*/
  section {
    padding: 60px 0;
    overflow: hidden;
  }
  
  .sections-bg {
    background-color: #f6f6f6;
  }
  
  .section-header {
    text-align: center;
    padding-bottom: 60px;
  }
  
  .section-header h2 {
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
  }
  
  .section-header h2:after {
    content: "";
    position: absolute;
    display: block;
    width: 50px;
    height: 3px;
    background: var(--color-primary);
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
  }
  
  .section-header p {
    margin-bottom: 0;
    color: #6f6f6f;
  }
  
  /*--------------------------------------------------------------
  # Breadcrumbs
  --------------------------------------------------------------*/
  .breadcrumbs .page-header {
    padding: 60px 0 60px 0;
    min-height: 20vh;
    position: relative;
    background-color: var(--color-primary);
  }
  
  .breadcrumbs .page-header h2 {
    font-size: 56px;
    font-weight: 500;
    color: rgb(10, 10, 10);
    font-family: var(--font-secondary);
  }
  
  .breadcrumbs .page-header p {
    color: rgba(15, 14, 14, 0.8);
  }
  
  .breadcrumbs nav {
    background-color: #f6f6f6;
    padding: 20px 0;
  }
  
  .breadcrumbs nav ol {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    margin: 0;
    padding: 0;
    font-size: 16px;
    font-weight: 600;
    color: var(--color-default);
  }
  
  .breadcrumbs nav ol a {
    color: var(--color-primary);
    transition: 0.3s;
  }
  
  .breadcrumbs nav ol a:hover {
    text-decoration: underline;
  }
  
  .breadcrumbs nav ol li+li {
    padding-left: 10px;
  }
  
  .breadcrumbs nav ol li+li::before {
    display: inline-block;
    padding-right: 10px;
    color: var(--color-secondary);
    content: "/";
  }
  
  /*--------------------------------------------------------------
  # Scroll top button
  --------------------------------------------------------------*/
  .scroll-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: -15px;
    z-index: 99999;
    background: var(--color-secondary);
    width: 44px;
    height: 44px;
    border-radius: 50px;
    transition: all 0.4s;
  }
  
  .scroll-top i {
    font-size: 24px;
    color: #fff;
    line-height: 0;
  }
  
  .scroll-top:hover {
    background: rgba(248, 90, 64, 0.8);
    color: #fff;
  }
  
  .scroll-top.active {
    visibility: visible;
    opacity: 1;
    bottom: 15px;
  }
  
  /*--------------------------------------------------------------
  # Preloader
  --------------------------------------------------------------*/
  #preloader {
    position: fixed;
    inset: 0;
    z-index: 999999;
    overflow: hidden;
    background: #fff;
    transition: all 0.6s ease-out;
  }
  
  #preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #fff;
    border-color: var(--color-primary) transparent var(--color-primary) transparent;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    -webkit-animation: animate-preloader 1.5s linear infinite;
    animation: animate-preloader 1.5s linear infinite;
  }
  
  @-webkit-keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }
  
    100% {
      transform: rotate(360deg);
    }
  }
  
  @keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }
  
    100% {
      transform: rotate(360deg);
    }
  }
  
  /*--------------------------------------------------------------
  # Disable aos animation delay on mobile devices
  --------------------------------------------------------------*/
  @media screen and (max-width: 768px) {
    [data-aos-delay] {
      transition-delay: 0 !important;
    }
  }
  
  /*--------------------------------------------------------------
  # Header
  --------------------------------------------------------------*/
  .topbar {
    background: rgb(175, 212, 245);
    height: 40px;
    font-size: 14px;
    transition: all 0.5s;
    color: #fff;
    padding: 0;
  }
  
  .topbar .contact-info i {
    font-style: normal;
    color: #fff;
    line-height: 0;
  }
  
  .topbar .contact-info i a,
  .topbar .contact-info i span {
    padding-left: 5px;
    color: #fff;
  }
  
  @media (max-width: 575px) {
  
    .topbar .contact-info i a,
    .topbar .contact-info i span {
      font-size: 13px;
    }
  }
  
  .topbar .contact-info i a {
    line-height: 0;
    transition: 0.3s;
  }
  
  .topbar .contact-info i a:hover {
    color: #fff;
    text-decoration: underline;
  }
  
  .topbar .social-links a {
    color: rgba(255, 255, 255, 0.7);
    line-height: 0;
    transition: 0.3s;
    margin-left: 20px;
  }
  
  .topbar .social-links a:hover {
    color: #fff;
  }
  
  .header {
    transition: all 0.5s;
    z-index: 997;
    height: 90px;
    background-color: var(--color-primary);
  }
  
  .header.sticked {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    height: 70px;
    box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.1);
  }
  
  .header .logo img {
    max-height: 40px;
    margin-right: 6px;
  }
  
  .header .logo h1 {
    font-size: 30px;
    margin: 0;
    font-weight: 600;
    letter-spacing: 0.8px;
    color: rgb(12, 11, 11);
    font-family: var(--font-primary);
  }
  
  .header .logo h1 span {
    color: #f96f59;
  }
  
  .sticked-header-offset {
    margin-top: 70px;
  }
  
  section {
    scroll-margin-top: 70px;
  }
  
  /*--------------------------------------------------------------
  # Desktop Navigation
  --------------------------------------------------------------*/
  @media (min-width: 1280px) {
    .navbar {
      padding: 0;
    }
  
    .navbar ul {
      margin: 0;
      padding: 0;
      display: flex;
      list-style: none;
      align-items: center;
    }
  
    .navbar li {
      position: relative;
    }
  
    .navbar>ul>li {
      white-space: nowrap;
      padding: 10px 0 10px 28px;
    }
  
    .navbar a,
    .navbar a:focus {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 3px;
      font-family: var(--font-secondary);
      font-size: 16px;
      font-weight: 600;
      color: rgba(14, 11, 11, 0.6);
      white-space: nowrap;
      transition: 0.3s;
      position: relative;
    }
  
    .navbar a i,
    .navbar a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
    }
  
    .navbar>ul>li>a:before {
      content: "";
      position: absolute;
      width: 100%;
      height: 2px;
      bottom: -6px;
      left: 0;
      background-color: var(--color-secondary);
      visibility: hidden;
      width: 0px;
      transition: all 0.3s ease-in-out 0s;
    }
  
    .navbar a:hover:before,
    .navbar li:hover>a:before,
    .navbar .active:before {
      visibility: visible;
      width: 100%;
    }
  
    .navbar a:hover,
    .navbar .active,
    .navbar .active:focus,
    .navbar li:hover>a {
      color: rgb(8, 8, 8);
    }
  
    .navbar .dropdown ul {
      display: block;
      position: absolute;
      left: 28px;
      top: calc(100% + 30px);
      margin: 0;
      padding: 10px 0;
      z-index: 99;
      opacity: 0;
      visibility: hidden;
      background: #fff;
      box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
      transition: 0.3s;
      border-radius: 4px;
    }
  
    .navbar .dropdown ul li {
      min-width: 200px;
    }
  
    .navbar .dropdown ul a {
      padding: 10px 20px;
      font-size: 15px;
      text-transform: none;
      font-weight: 600;
      color: #006a5d;
    }
  
    .navbar .dropdown ul a i {
      font-size: 12px;
    }
  
    .navbar .dropdown ul a:hover,
    .navbar .dropdown ul .active:hover,
    .navbar .dropdown ul li:hover>a {
      color: var(--color-secondary);
    }
  
    .navbar .dropdown:hover>ul {
      opacity: 1;
      top: 100%;
      visibility: visible;
    }
  
    .navbar .dropdown .dropdown ul {
      top: 0;
      left: calc(100% - 30px);
      visibility: hidden;
    }
  
    .navbar .dropdown .dropdown:hover>ul {
      opacity: 1;
      top: 0;
      left: 100%;
      visibility: visible;
    }
  }
  
  @media (min-width: 1280px) and (max-width: 1366px) {
    .navbar .dropdown .dropdown ul {
      left: -90%;
    }
  
    .navbar .dropdown .dropdown:hover>ul {
      left: -100%;
    }
  }
  
  @media (min-width: 1280px) {
  
    .mobile-nav-show,
    .mobile-nav-hide {
      display: none;
    }
  }
  
  /*--------------------------------------------------------------
  # Mobile Navigation
  --------------------------------------------------------------*/
  @media (max-width: 1279px) {
    .navbar {
      position: fixed;
      top: 0;
      right: -100%;
      width: 100%;
      max-width: 400px;
      bottom: 0;
      transition: 0.3s;
      z-index: 9997;
    }
  
    .navbar ul {
      position: absolute;
      inset: 0;
      padding: 50px 0 10px 0;
      margin: 0;
      background: rgb(249, 250, 250);
      overflow-y: auto;
      transition: 0.3s;
      z-index: 9998;
    }
  
    .navbar a,
    .navbar a:focus {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
      font-family: var(--font-primary);
      font-size: 15px;
      font-weight: 600;
      color: rgba(255, 255, 255, 0.7);
      white-space: nowrap;
      transition: 0.3s;
    }
  
    .navbar a i,
    .navbar a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
    }
  
    .navbar a:hover,
    .navbar .active,
    .navbar .active:focus,
    .navbar li:hover>a {
      color: rgb(14, 11, 11);
    }
  
    .navbar .getstarted,
    .navbar .getstarted:focus {
      background: var(--color-primary);
      padding: 8px 20px;
      border-radius: 4px;
      margin: 15px;
      color: rgb(10, 8, 8);
    }
  
    .navbar .getstarted:hover,
    .navbar .getstarted:focus:hover {
      color: rgb(8, 7, 7);
      background: rgba(0, 131, 116, 0.8);
    }
  
    .navbar .dropdown ul,
    .navbar .dropdown .dropdown ul {
      position: static;
      display: none;
      padding: 10px 0;
      margin: 10px 20px;
      transition: all 0.5s ease-in-out;
      background-color: #f4f5f5;
      border: 1px solid #006459;
    }
  
    .navbar .dropdown>.dropdown-active,
    .navbar .dropdown .dropdown>.dropdown-active {
      display: block;
    }
  
    .mobile-nav-show {
      color: rgba(255, 255, 255, 0.6);
      font-size: 28px;
      cursor: pointer;
      line-height: 0;
      transition: 0.5s;
      z-index: 9999;
      margin-right: 10px;
    }
  
    .mobile-nav-hide {
      color: #fff;
      font-size: 32px;
      cursor: pointer;
      line-height: 0;
      transition: 0.5s;
      position: fixed;
      right: 20px;
      top: 20px;
      z-index: 9999;
    }
  
    .mobile-nav-active {
      overflow: hidden;
    }
  
    .mobile-nav-active .navbar {
      right: 0;
    }
  
    .mobile-nav-active .navbar:before {
      content: "";
      position: fixed;
      inset: 0;
      background: rgba(0, 106, 93, 0.8);
      z-index: 9996;
    }
  }
  
  
  
  /*--------------------------------------------------------------
  # Hero Section
  --------------------------------------------------------------*/
  .hero {
    width: 100%;
    position: relative;
    background: var(--color-primary);
    padding: 60px 0 0 0;
  }
  
  @media (min-width: 1365px) {
    .hero {
      background-attachment: fixed;
    }
  }
  
  
  
  /* Bottom right text */
  .centered2 {
    position: absolute;
    top: 80%;
    left: 50%;
    width: 25%;
    height: 9%;
    text-decoration: underline;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size:2vw;
    text-align: center;
    transform: translate(-50%, -50%);
    background-color: white;
    border-radius: 20%;
    color: black;
  }
  
  /* Centered text */
  .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 98%;
    height: 15%;
    text-align:center;
    font-family: philosopher;
    font-size: 4vw ;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 15%;
    color:rgb(7, 5, 5);
    
  }
  
  
  
  
  .hero h2 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
    color: rgb(8, 8, 8);
  }
  
  .hero p {
    color: rgba(10, 9, 9, 0.6);
    font-weight: 400;
    margin-bottom: 30px;
  }
  
  .hero .btn-get-started {
    font-family: var(--font-primary);
    font-weight: 500;
    font-size: 15px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 14px 40px;
    border-radius: 50px;
    transition: 0.3s;
    color: rgb(8, 7, 7);
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
    border: 2px solid rgba(255, 255, 255, 0.1);
  }
  
  .hero .btn-get-started:hover {
    border-color: rgba(255, 255, 255, 0.5);
  }
  
  .hero .btn-watch-video {
    font-size: 16px;
    transition: 0.5s;
    margin-left: 25px;
    color: rgb(8, 7, 7);
    font-weight: 600;
  }
  
  .hero .btn-watch-video i {
    color: rgba(255, 255, 255, 0.5);
    font-size: 32px;
    transition: 0.3s;
    line-height: 0;
    margin-right: 8px;
  }
  
  .hero .btn-watch-video:hover i {
    color: #fff;
  }
  
  @media (max-width: 640px) {
    .hero h2 {
      font-size: 36px;
    }
  
    .hero .btn-get-started,
    .hero .btn-watch-video {
      font-size: 14px;
    }
  }
  
  .hero .icon-boxes {
    padding-bottom: 60px;
  }
  
  @media (min-width: 1200px) {
    .hero .icon-boxes:before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: calc(50% + 20px);
      background-color: #fff;
    }
  }
  
  .hero .icon-box {
    padding: 60px 30px;
    position: relative;
    overflow: hidden;
    background: #fa9107;
    box-shadow: 0 0 29px 0 rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease-in-out;
    border-radius: 8px;
    z-index: 1;
    height: 100%;
    width: 100%;
    text-align: center;
  }
  
  .hero .icon-box .title {
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 24px;
  }
  
  .hero .icon-box .title a {
    color: rgb(7, 5, 5);
    transition: 0.3s;
  }
  
  .hero .icon-box .icon {
    margin-bottom: 20px;
    padding-top: 10px;
    display: inline-block;
    transition: all 0.3s ease-in-out;
    font-size: 48px;
    line-height: 1;
    color: rgba(12, 10, 10, 0.6);
  }
  
  .hero .icon-box:hover {
    background: #f6f8f8;
  }
  
  .hero .icon-box:hover .title a,
  .hero .icon-box:hover .icon {
    color: #fff;
  }
  
  
  
  /*--------------------------------------------------------------
  # Footer
  --------------------------------------------------------------*/
  .footer {
    font-size: 14px;
    background-color:#050d7e;
    padding: 50px 0;
    color: rgb(252, 252, 252);
  }
  
  .footer .footer-info .logo {
    line-height: 0;
    margin-bottom: 25px;
  }
  
  .footer .footer-info .logo img {
    max-height: 40px;
    margin-right: 6px;
  }
  
  .footer .footer-info .logo span {
    font-size: 30px;
    font-weight: 700;
    letter-spacing: 1px;
    color: #fff;
    font-family: var(--font-primary);
  }
  
  .footer .footer-info p {
    font-size: 14px;
    font-family: var(--font-primary);
  }
  
  .footer .social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    color: rgba(255, 255, 255, 0.7);
    margin-right: 10px;
    transition: 0.3s;
  }
  
  .footer .social-links a:hover {
    color: #fff;
    border-color: #fff;
  }
  
  .footer h4 {
    font-size: 16px;
    font-weight: bold;
    position: relative;
    padding-bottom: 12px;
  }
  
  .footer .footer-links {
    margin-bottom: 30px;
  }
  
  .footer .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .footer .footer-links ul i {
    padding-right: 2px;
    color: rgba(0, 131, 116, 0.8);
    font-size: 12px;
    line-height: 0;
  }
  
  .footer .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }
  
  .footer .footer-links ul li:first-child {
    padding-top: 0;
  }
  
  .footer .footer-links ul a {
    color: rgba(255, 255, 255, 0.7);
    transition: 0.3s;
    display: inline-block;
    line-height: 1;
  }
  
  .footer .footer-links ul a:hover {
    color: #fff;
  }
  
  .footer .footer-contact p {
    line-height: 26px;
  }
  
  .footer .copyright {
    text-align: center;
  }
  
  .footer .credits {
    padding-top: 4px;
    text-align: center;
    font-size: 13px;
  }
  
  .footer .credits a {
    color: #fff;
  }
        }
    </style>
</head>
<header> 
    <!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Cool Finland OY<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="#hero">Home</a></li>
          <li><a href="../Code/aboutus1.html">About</a></li>
          <li><a href="../calendar/index.php">Make a Reservation</a></li>
          <li><a href="../contact.php">Contact us</a></li>
          <li><a href="./SignUpForm/index.php">Log out</a></li>
          
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>
<body class="bg-light">

    <?php
        require_once('db-connect.php');

        $schedules = $conn->query("SELECT * FROM `reservation_form`");
        $sched_res = [];
        

        foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
            $row['sdate'] = date("F d Y ",strtotime($row['reservation_date']));
            $sched_res[$row['id']] = $row;
        }

        if(isset($conn)) $conn->close(); 
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container d-flex justify-content-center">
            <div class="row">

            </div>
        </div>
    </nav>
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">

                            <div class="elem-group">
                            <label for="date_time">Date</label>
                            <input type="date" id="reservation_date" name="reservation_date" class="form-control" placeholder="Enter Date" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
                            </div>

                            <br><br>

                            <label for="type">Choose Delivery type</label>
                            <select id="type" name="type" pattern=[A-Z\sa-z]{3,20} required>
                            <option value="Container">Container</option>
                            <option value="Semi-trailer">Semi-trailer</option>
                            <option value="Tractor-trailer">Tractor-trailer</option>
                            </select>

                            <div class="elem-group">
                            <label for="amount">Amount</label>
                            <input type="number" id="amount" name="amount" placeholder="amount" pattern=[A-Z\sa-z]{3,20} required>
                            </div>

                            <br><br>
                            <div class="elem-group">
                            <label for="Fname">First name</label>
                            <input type="text" id="fname" name="fname" placeholder="First Name" pattern=[A-Z\sa-z]{3,20} required>
                            </div>
                            <br><br>
                            <div class="elem-group">
                            <label for="Lname">Last name</label>
                            <input type="text" id="lname" name="lname" placeholder="Last Name" pattern=[A-Z\sa-z]{3,20} required>
                            </div>
                            <br><br>
                            <div class="elem-group">
                            <label for="Phone_number">Phone Number</label>
                            <input type="text" id="phone_number" name="phone_number" placeholder="Phone number" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
                            </div>
                            <br><br>
                            <div class="elem-group">
                            <label for="Company">Company</label>
                            <input type="Company" id="company_name" name="company_name" placeholder="Company" required>
                            </div>
                            <br><br>
                            <div class="elem-group">
                            <label for="email">Your E-mail</label>
                            <input type="email" id="email" name="email_id" placeholder="john.doe@email.com" required>
                            </div>
                            <br><br>
                            <div class="elem-group">
                            <label for="message">Anything Else?</label>
                            <textarea id="additional" name="additional" placeholder="Tell us anything else that might be important. Max: 500 characters" required></textarea>
                            </div>
                            
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>

                            <dt class="text-muted">Type</dt>
                            <dd id="type" class=""></dd>

                            <dt class="text-muted">Amount</dt>
                            <dd id="amount" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="script.js"></script>
    <script>
        var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
    </script>
</body>

<footer>
      <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-12 footer-info">
      <a href="index.html" class="logo d-flex align-items-center">
        <span>Cool Finland</span>
      </a>
      
      <div class="social-links d-flex mt-4">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Product Management</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Graphic Design</a></li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4>Contact Us</h4>
      <p>
        Kiimassuontie 127  <br>
        30420 Forssa
        Suomi<br>
        <br>
        <strong>Phone:8994357345</strong><br>
        <strong>Email:cool.finland@gmail.com</strong><br>
      </p>

    </div>

  </div>
</div>

<div class="container mt-4">
  <div class="copyright">
    &copy; ©2021-2022 Cool Finland Oy <strong><span></span></strong>. All Rights Reserved.
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
    
  </div>
</div>
</footer>
</html>