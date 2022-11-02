// firetracer

function showIframeData(){
    const iframeData = document.getElementById("iframe-data");
    iframeData.classList.toggle("d-none");
}

copy_embed_api=(e,rcs_type,rcs_id,rcs_name)=>{
    e.preventDefault();
    navigator.clipboard.writeText("<iframe src='https://firetracer.000webhostapp.com/embed.php?rcs="+rcs_type+"&id="+rcs_id+"' width='600' height='300' name='"+rcs_name+" - firetracer' sandbox=''></iframe>").then(() => {
        alert("code copied");    
    })
}
