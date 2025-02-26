// const alertConfig = [
//     {
//         id: "sa-basic",
//         config: { title: "Any fool can use a computer", confirmButtonColor: "#776acf" },
//     },
//     {
//         id: "sa-title",
//         config: { title: "The Internet?", text: "That thing is still around?", icon: "question", confirmButtonColor: "#776acf" },
//     },
//     {
//         id: "sa-success",
//         config: { 
//             title: "Good job!", 
//             text: "You clicked the button!", 
//             icon: "success", 
//             showCancelButton: true, 
//             confirmButtonColor: "#776acf", 
//             cancelButtonColor: "#f34e4e" 
//         },
//     },
//     {
//         id: "sa-warning",
//         config: { 
//             title: "Are you sure?", 
//             text: "You won't be able to revert this!", 
//             icon: "warning", 
//             showCancelButton: true, 
//             confirmButtonColor: "#51d28c", 
//             cancelButtonColor: "#f34e4e", 
//             confirmButtonText: "Yes, delete it!" 
//         },
//         callback: (result) => {
//             if (result.isConfirmed) {
//                 Swal.fire("Deleted!", "Your file has been deleted.", "success");
//             }
//         }
//     },
//     {
//         id: "sa-params",
//         config: { 
//             title: "Are you sure?", 
//             text: "You won't be able to revert this!", 
//             icon: "warning", 
//             showCancelButton: true, 
//             confirmButtonText: "Yes, delete it!", 
//             cancelButtonText: "No, cancel!", 
//             buttonsStyling: false 
//         },
//         callback: (result) => {
//             if (result.isConfirmed) {
//                 Swal.fire("Deleted!", "Your file has been deleted.", "success");
//             } else if (result.dismiss === Swal.DismissReason.cancel) {
//                 Swal.fire("Cancelled", "Your imaginary file is safe :)", "error");
//             }
//         }
//     },
//     {
//         id: "sa-image",
//         config: { title: "Sweet!", text: "Modal with a custom image.", imageUrl: "assets/images/logo-sm.png", imageHeight: 40, confirmButtonColor: "#776acf", animation: false },
//     },
//     {
//         id: "sa-close",
//         config: { 
//             title: "Auto close alert!", 
//             html: "I will close in <strong></strong> seconds.", 
//             timer: 2000, 
//             timerProgressBar: true, 
//             didOpen: () => {
//                 Swal.showLoading();
//             } 
//         },
//     },
//     {
//         id: "custom-html-alert",
//         config: { 
//             title: "<i>HTML</i> <u>example</u>", 
//             icon: "info", 
//             html: 'You can use <b>bold text</b>, <a href="//Themesdesign.in/">links</a> and other HTML tags', 
//             showCloseButton: true, 
//             showCancelButton: true, 
//             confirmButtonColor: "#47bd9a", 
//             cancelButtonColor: "#f34e4e" 
//         },
//     },
//     {
//         id: "sa-position",
//         config: { position: "top-end", icon: "success", title: "Your work has been saved", showConfirmButton: false, timer: 1500 },
//     },
//     {
//         id: "custom-padding-width-alert",
//         config: { title: "Custom width, padding, background.", width: 600, padding: 100, confirmButtonColor: "#776acf", background: "#fff url(assets/images/auth-bg.jpg)" },
//     },
//     {
//         id: "ajax-alert",
//         config: { 
//             title: "Submit email to run ajax request", 
//             input: "email", 
//             showCancelButton: true, 
//             confirmButtonText: "Submit", 
//             showLoaderOnConfirm: true, 
//             confirmButtonColor: "#776acf", 
//             cancelButtonColor: "#f34e4e", 
//             preConfirm: (email) => {
//                 return new Promise((resolve, reject) => {
//                     setTimeout(() => {
//                         email === "taken@example.com" ? reject("This email is already taken.") : resolve();
//                     }, 2000);
//                 });
//             }
//         }
//     },
// ];

// // Boucle pour configurer les gestionnaires
// alertConfig.forEach(({ id, config, callback }) => {
//     const button = document.getElementById(id);
//     if (button) {
//         button.addEventListener("click", () => {
//             Swal.fire(config).then(callback || (() => {}));
//         });
//     }
// });


document.getElementById("sa-basic").addEventListener("click",function(){Swal.fire({title:"Any fool can use a computer",confirmButtonColor:"#776acf"})}),document.getElementById("sa-title").addEventListener("click",function(){Swal.fire({title:"The Internet?",text:"That thing is still around?",icon:"question",confirmButtonColor:"#776acf"})}),document.getElementById("sa-success").addEventListener("click",function(){Swal.fire({title:"Good job!",text:"You clicked the button!",icon:"success",showCancelButton:!0,confirmButtonColor:"#776acf",cancelButtonColor:"#f34e4e"})}),document.getElementById("sa-warning").addEventListener("click",function(){Swal.fire({title:"Are you sure?",text:"You won't be able to revert this!",icon:"warning",showCancelButton:!0,confirmButtonColor:"#51d28c",cancelButtonColor:"#f34e4e",confirmButtonText:"Yes, delete it!"}).then(function(t){t.value&&Swal.fire("Deleted!","Your file has been deleted.","success")})}),document.getElementById("sa-params").addEventListener("click",function(){Swal.fire({title:"Are you sure?",text:"You won't be able to revert this!",icon:"warning",showCancelButton:!0,confirmButtonText:"Yes, delete it!",cancelButtonText:"No, cancel!",confirmButtonClass:"btn btn-success mt-2",cancelButtonClass:"btn btn-danger ms-2 mt-2",buttonsStyling:!1}).then(function(t){t.value?Swal.fire({title:"Deleted!",text:"Your file has been deleted.",icon:"success",confirmButtonColor:"#776acf"}):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"Your imaginary file is safe :)",icon:"error",confirmButtonColor:"#776acf"})})}),document.getElementById("sa-image").addEventListener("click",function(){Swal.fire({title:"Sweet!",text:"Modal with a custom image.",imageUrl:"assets/images/logo-sm.png",imageHeight:40,confirmButtonColor:"#776acf",animation:!1})}),document.getElementById("sa-close").addEventListener("click",function(){var t;Swal.fire({title:"Auto close alert!",html:"I will close in <strong></strong> seconds.",timer:2e3,timerProgressBar:!0,didOpen:function(){Swal.showLoading(),t=setInterval(function(){var t,e=Swal.getHtmlContainer();!e||(t=e.querySelector("b"))&&(t.textContent=Swal.getTimerLeft())},100)},onClose:function(){clearInterval(t)}}).then(function(t){t.dismiss===Swal.DismissReason.timer&&console.log("I was closed by the timer")})}),document.getElementById("custom-html-alert").addEventListener("click",function(){Swal.fire({title:"<i>HTML</i> <u>example</u>",icon:"info",html:'You can use <b>bold text</b>, <a href="//Themesdesign.in/">links</a> and other HTML tags',showCloseButton:!0,showCancelButton:!0,confirmButtonClass:"btn btn-success",cancelButtonClass:"btn btn-danger ml-1",confirmButtonColor:"#47bd9a",cancelButtonColor:"#f34e4e",confirmButtonText:'<i class="fas fa-thumbs-up me-1"></i> Great!',cancelButtonText:'<i class="fas fa-thumbs-down"></i>'})}),document.getElementById("sa-position").addEventListener("click",function(){Swal.fire({position:"top-end",icon:"success",title:"Your work has been saved",showConfirmButton:!1,timer:1500})}),document.getElementById("custom-padding-width-alert").addEventListener("click",function(){Swal.fire({title:"Custom width, padding, background.",width:600,padding:100,confirmButtonColor:"#776acf",background:"#fff url(assets/images/auth-bg.jpg)"})}),document.getElementById("ajax-alert").addEventListener("click",function(){Swal.fire({title:"Submit email to run ajax request",input:"email",showCancelButton:!0,confirmButtonText:"Submit",showLoaderOnConfirm:!0,confirmButtonColor:"#776acf",cancelButtonColor:"#f34e4e",preConfirm:function(n){return new Promise(function(t,e){setTimeout(function(){"taken@example.com"===n?e("This email is already taken."):t()},2e3)})},allowOutsideClick:!1}).then(function(t){Swal.fire({icon:"success",title:"Ajax request finished!",confirmButtonColor:"#776acf",html:"Submitted email: "+t})})});