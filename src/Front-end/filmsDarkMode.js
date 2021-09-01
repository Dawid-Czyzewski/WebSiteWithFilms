function filmsDarkMode(){
    
    const navBar = document.getElementById("navBar");
    const body = document.getElementById("body");
    const footer = document.getElementById("footer");
    const a = document.getElementsByTagName("a");

    if(navBar.classList.contains("notDarkModeNavBar")){

        navBar.classList.remove("notDarkModeNavBar");
        navBar.classList.add("darkModeNavBar");

        body.classList.remove("notDarkModeBody");
        body.classList.add("darkModeBody");

        footer.classList.remove("notDarkMode");
        footer.classList.add("darkMode");

        for(let i=0; i<a.length; i++) {
            a[i].classList.remove("notDarkMode");
            a[i].classList.add("darkMode");
        }

    }else if(navBar.classList.contains("darkModeNavBar")){

        navBar.classList.remove("darkModeNavBar");
        navBar.classList.add("notDarkModeNavBar");

        body.classList.remove("darkModeBody");
        body.classList.add("notDarkModeBody");

        footer.classList.remove("darkMode");
        footer.classList.add("notDarkMode");

        for(let i=0; i<a.length; i++) {
             a[i].classList.remove("darkMode");
            a[i].classList.add("notDarkMode");
        } 
    }
}
        
        