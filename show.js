
            var table=document.getElementById("table1");
            var add=document.getElementById("mid-container");
            var message=document.getElementById("send-message");
            var Recored=document.getElementById("Recored-employee");
            var myNode=document.getElementById("mid-box");

            table.display="block";
            
        function show(value){
            if(value==-1){
                while (myNode.firstChild) {
            myNode.removeChild(myNode.firstChild);
        
                }
                myNode.style.height="1500px"
                  myNode.appendChild(add);
                  
              }
          if(value==1){
            while (myNode.firstChild) {
        myNode.removeChild(myNode.firstChild);
    
            }
              myNode.appendChild(add);
              
          }
          else if(value==2){
              
            myNode.style.height="500px"
            while (myNode.firstChild) {
        myNode.removeChild(myNode.firstChild);
    
            }
            table.style.display="block";
            table.style.color="black";
            myNode.appendChild(table);
          }else if(value==3){
            myNode.style.height="500px"
            while (myNode.firstChild) {
                myNode.removeChild(myNode.firstChild);
            
                    }
                    message.style.display="block";
                    myNode.append(message);

          }else if(value==4){
            myNode.style.height="500px"
            while (myNode.firstChild) {
                myNode.removeChild(myNode.firstChild);
            
                    }
                    myNode.append(Recored);
                    Recored.style="block";
          }
          else if(value==5){
            myNode.style.height="500px"
            while (myNode.firstChild) {
                myNode.removeChild(myNode.firstChild);
            
                    }
          }
          else if(value==6){
            myNode.style.height="500px"
            while (myNode.firstChild) {
                myNode.removeChild(myNode.firstChild);
            
                    }
          }

    
    }
    