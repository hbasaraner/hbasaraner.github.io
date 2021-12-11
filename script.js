window.onload = function() {
    const year = document.getElementById('year');
    const date = new Date().getFullYear();
    year.innerHTML = date;
    
    const texts = {
        tr: {
            header: "Yapım Aşamasında",
            desc: "Site eski olduğu için yenileme kararı aldım. Aşağıdaki linklerden bana ulaşabilir veya takip edebilirsiniz."
        },
        en: {
            header: "Under Construction",
            desc: "This site is using old-school technology. So, I decided to update. Until that, you can follow/contact with me with the links given below."
        }
    }
    let lang = "tr";
    let header = document.getElementById("header");
    let desc = document.getElementById("desc");
    
    window.setInterval(function() {
        header.innerHTML = texts[lang].header;
        desc.innerHTML = texts[lang].desc;
        lang = lang == "tr" ? "en" : "tr";
    }, 5000);
}