const form= document.querySelector(".typing-area"),
inputField= form.querySelector(".input-field"),
sendBtn= form.querySelector("button"),
chatbox= document.querySelector('.chat-content');


sendBtn.onclick =() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../controller/send_msg.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            inputField.value= "";
            scrollToBottom();
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../controller/get_msg_controller.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            chatbox.innerHTML= data;
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
  }, 500);

  

