<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="stylesheet" href="../../public/assets/css/header.css">
    <link rel="stylesheet" href="../../public/assets/css/darkMode.css">
    <title><?=$tabTitle ?? 'test'?></title>
</head>
<body>
    <div id="PNF" class="PNF">
        <div class="PNFContent">
            <h1>Error 404 : </h1>
            <div class="separateLine"></div>
            <h2>La page que vous recherchez n’a pas été trouvée.</h2>
            <div class="separateLine"></div>
            <button class="PNFbtn">Revenir a L'accueil</button>
        </div>
    </div>

    <script src="/public/assets/js/404.js"></script>
</body>
</html>

<!-- CSS -->

<!-- 

#PNF {
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    height: 80vh;
}

/* Font-Sizes */

    /* mobile */
    #PNF h1{
        font-size: 40px;
        font-family: 'UnicaOne';
    }
    #PNF h2{
        font-size: 20px;
        font-family: 'Vollkorn';
    }   

    /* desktop */
    @media (min-width: 900px ) {
        #PNF h1{
            font-size: 70px;
        }
        #PNF h2{
            font-size: 35px;
        }   
    }
    /* tablet  */
    @media (min-width: 500px ) and (max-width: 900px) {
        #PNF h1{
            font-size: 60px;
        } 
        #PNF h2{
            font-size: 25px;
        }
    }


.PNFbtn {
    font-family: "Vollkorne";
    padding: 0.6rem 2rem;
    border-radius: 50px;
    margin-top: 3rem;
    color: #e6725a;
    border: #e6725a 2px solid;
    text-transform: uppercase;
    font-size: 0.6rem;
    background-color: #f3f3f3;
    text-decoration: none;
}

.PNFbtn:hover {
    background-color: #e6725a;
    color: #f3f3f3;
}

/* dividers css */
.text-divider {
    display: flex;
    align-items: center;
    --text-divider-gap: 1rem; 
    padding: 1rem 0;
}

.text-divider::before,
.text-divider::after {
    content: "";
    height: 1px;
    background-color: silver;
    flex-grow: 1;
}

.text-divider::before {
    margin-right: var(--text-divider-gap);
}

.text-divider::after {
    margin-left: var(--text-divider-gap);
}
/* end dividers css */


-->