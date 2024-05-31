document.addEventListener("DOMContentLoaded", function() {
    const colorInput = document.querySelector(".color-input");
    const colorDiv = document.querySelector(".color");

    colorInput.addEventListener("input", function() {
        colorDiv.style.background = colorInput.value;
    });
});


document.addEventListener("DOMContentLoaded", function() {
    var colorButtons = document.querySelectorAll('.color-btn');
    colorButtons.forEach(function(button) {
        button.style.backgroundColor = button.getAttribute('data-color');
    });
});


        document.addEventListener("DOMContentLoaded", function() {
            const colorButtons = document.querySelectorAll(".color-btn");
            const colorInput = document.querySelector(".color-input");
            const colorDiv = document.querySelector(".color");
            const img1 = document.querySelector(".img-1");

            colorButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const color = this.getAttribute("data-color");
                    updateColor(color);
                });
            });

            colorInput.addEventListener("input", function() {
                const color = this.value;
                updateColor(color);
            });

            function updateColor(color) {
                colorDiv.style.background = color;
                img1.style.filter = `sepia(1) hue-rotate(200deg) saturate(5) brightness(1.5) contrast(1.2)`;
            }
        });

        
        
document.addEventListener("DOMContentLoaded", function() {
    const colorInput = document.querySelector(".color-input");
    const colorDiv = document.querySelector(".color");

    colorInput.addEventListener("input", function() {
        colorDiv.style.background = colorInput.value;
    });

    var colorButtons = document.querySelectorAll('.color-btn');
    colorButtons.forEach(function(button) {
        button.style.backgroundColor = button.getAttribute('data-color');
    });

    const logoInput = document.getElementById("logoInput");
    logoInput.addEventListener("change", function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const logoImg = document.createElement("img");
                logoImg.src = e.target.result;
                logoImg.classList.add("logo-img");
                document.querySelector(".logo-container").appendChild(logoImg);

                
                logoImg.style.position = "absolute";
                logoImg.style.left = "50%";
                logoImg.style.top = "50%";
                logoImg.style.transform = "translate(-50%, -50%)";
                logoImg.style.zIndex = "3";
                logoImg.style.cursor = "move";

                let isDragging = false;
                let isFixed = false;
                let startX, startY;
                let scale = 1.0;

                logoImg.addEventListener("mousedown", function(event) {
                    if (!isFixed) {
                        isDragging = true;
                        startX = event.clientX - logoImg.getBoundingClientRect().left;
                        startY = event.clientY - logoImg.getBoundingClientRect().top;
                    }
                });

                document.addEventListener("mousemove", function(event) {
                    if (isDragging) {
                        let x = event.clientX - startX;
                        let y = event.clientY - startY;
                        logoImg.style.left = x + "px";
                        logoImg.style.top = y + "px";
                    }
                });

                document.addEventListener("mouseup", function() {
                    isDragging = false;
                });

                
                logoImg.addEventListener("dblclick", function() {
                    if (isFixed) {
                        isFixed = false;
                        logoImg.style.cursor = "move";
                    } else {
                        isFixed = true;
                        logoImg.style.cursor = "default";
                    }
                });

                
                logoImg.addEventListener("wheel", function(event) {
                    event.preventDefault();
                    if (event.deltaY < 0) {
                        scale *= 1.1; 
                    } else {
                        scale *= 0.9; 
                    }
                    logoImg.style.transform = `translate(-50%, -50%) scale(${scale})`;
                });
            };
            reader.readAsDataURL(file);
        }
    });
});


