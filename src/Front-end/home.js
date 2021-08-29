function darkMode(){
    const title = document.getElementById("title");
    const navBar = document.getElementById("navBar");
    const textUnderTitle = document.getElementById("textUnderTitle");
    const body = document.getElementById("body");
    const footer = document.getElementById("footer");

    const a = document.getElementsByTagName("a");

    if(title.classList.contains("darkMode")){
        title.classList.remove("darkMode");
        title.classList.add("notDarkMode");

        navBar.classList.remove("darkModeNavBar");
        navBar.classList.add("notDarkModeNavBar");

        textUnderTitle.classList.remove("darkMode");
        textUnderTitle.classList.add("notDarkMode");

        body.classList.remove("darkModeBody");
        body.classList.add("notDarkModeBody");

        footer.classList.remove("darkMode");
        footer.classList.add("notDarkMode");

     for(let i=0; i<a.length; i++) {
        a[i].classList.remove("darkMode");
        a[i].classList.add("notDarkMode");
     }  
         
    }else if(title.classList.contains("notDarkMode")){
        title.classList.remove("notDarkMode");
        title.classList.add("darkMode");

        navBar.classList.remove("notDarkModeNavBar");
        navBar.classList.add("darkModeNavBar");

        textUnderTitle.classList.remove("notDarkMode");
        textUnderTitle.classList.add("darkMode");

        body.classList.remove("notDarkModeBody");
        body.classList.add("darkModeBody");

        footer.classList.remove("notDarkMode");
        footer.classList.add("darkMode");

        for(let i=0; i<a.length; i++) {
            a[i].classList.remove("notDarkMode");
            a[i].classList.add("darkMode");
         }  
    }

}


