<!-- CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
<!-- jQuery minified version 3.x -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
<style>
/* input[type="text"] {
    border: none;
    outline: none;
    width: 35px;
    text-align: center;
} */

.unclickedinput {
    /* border: 1px solid blue; */
    /* border-radius: 3px; */
    border: none;
    width: 40px;
    text-align: center;
}

input {
    border-radius: 0px !important;
}

.clickedinput {
    border: 1px solid blue;
    width: 40px;
    text-align: center;
    color: black
}

.label-div {
    display: inline-block;
    vertical-align: top;
    margin-right: 10px;
    width: 100%;
}

#myList {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;

}

.list_style {
    margin: 3px;
    padding: 2px;
    border: 1px solid #ccc;
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-basis: calc(1% - 10px);

}


.box {
    width: 45px;
    height: 45px;
    display: inline-block;
}

.box_interval {
    display: inline-block;
    width: 45px;
    height: 20px;
    border: 1px solid red;
    /* border: 1px solid black; */
}

.border-top {
    border-top: 1px solid red;
}

.border-bottom {
    border-bottom: 1px solid red;
}

.container_new {
    width: 300px;
    display: flex;
    border: red 1px solid
        /* justify-content: space-between; */
}

p {
    padding: 2px;
    margin: 0;
    font-size: 12px
        /* border: 1px solid #ccc; */
}
</style>

<div class="container" style="margin-top:100px">
    <div class="row">
        <div class="col-2">
            <div class="search-box">
                <input type="search" id="search" placeholder="Buscar Script..." />
                <i class="bi-search"></i>
            </div>
            <div id="lista" class="filelist-container">
                <p class="hidden" id="no-results">No hay resultados para mostrar</p>
                <ul class="filelist developer" id="results">
                </ul>
                <ul class="filelist developer treeview" id="mainlist">
                    <?= $filetree ?>
                </ul>
            </div>
        </div>
        <div class="col-10 developer-editor">
            <div class="row">
                <div class="col-2 overflow-auto">
                    <div class="container_new">
                        <p>POSICION</p>
                        <p>Check <br>CKP</p>
                        <p>Check <br> CMP1</p>
                        <p>Check <br>CMP2</p>
                        <p>Check <br>CMP3</p>
                    </div>
                    <ul id="myList" class="container_new">

                    </ul>
                </div>
                <div class="col-10 overflow-auto">
                    <div style="border:1px solid red" id="dynamicdiv">
                        <p style="font-size:18px">CRAFICA</p>
                        <div id="interval" style="padding-left:40px">

                        </div>
                        <div class="label-div">
                            <div style="float:left;font-size:16px;width:50px;padding-top:30px">CKP</div>
                            <div id="first_div">
                            </div>
                        </div>
                        <div class="label-div">
                            <div style="float:left;font-size:16px;width:50px;padding-top:30px">CMP1</div>
                            <div id="second_div">

                            </div>
                        </div>
                        <div class="label-div">
                            <div style="float:left;font-size:16px;width:50px;padding-top:30px">CMP2</div>
                            <div id="third_div">

                            </div>
                        </div>
                        <div class="label-div">
                            <div style="float:left;font-size:16px;width:50px;padding-top:30px">CMP3</pdiv>

                            </div>
                            <div id="fourth_div">

                            </div>
                        </div>
                        <div style="margin-top:160px;margin-left:500px">
                            <button style="font-size:14px;padding:5px" id="save"> Gurdar</button>
                            <button style=" font-size:14px;padding:5px" id="txtdownload">Descargar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    const is_register_ID = "<?php echo $registerkey; ?>";
    const developerfileid = "<?php echo $id; ?>";
    const equip_ID = "<?php echo $register_data ? $register_data["equipID"] : null ?>";
    const status = "<?php echo $register_data ? $register_data["status"] : 0; ?>";
    const implusearr = "<?php echo ($str !== null && $str !== "") ? $str : 0 ?>";
    const newarr = [];

    if (implusearr != 0) {
        const myArray = implusearr.split(' ').map(str => str.split(','));
        let rows = 4;
        let cols = myArray[3].length
        const values = implusearr.split(','); // split the string at each comma
        // initialize the 2D array
        // loop through the values and group them into sub-arrays
        for (let i = 0; i < rows; i++) {
            newarr.push(values.slice(i * cols, (i + 1) * cols));
        }
    }
    const container_first = document.getElementById('first_div');
    const container_second = document.getElementById('second_div');
    const container_third = document.getElementById('third_div');
    const container_fourth = document.getElementById('fourth_div');
    let zerosArray_first = []
    let zerosArray_second = []
    let zerosArray_third = []
    let zerosArray_fourth = []
    let haspressedbutton = false
    //impulse generator
    const drawingImplus = (inputElements, container, color) => {
        for (let i = 0; i < inputElements.length; i++) {
            const value = inputElements[i];
            const box = document.createElement('div');
            box.classList.add('box');
            if (Number(value) === 0) {
                box.style.borderBottom = '2px solid ' + color;

            } else {
                box.style.borderTop = '2px solid ' + color;
            }

            if (i > 0 && Number(inputElements[i - 1]) !== Number(value)) {
                box.style.borderLeft = '2px solid ' + color;
            }
            // box.style.marginRight = '2px';
            container.appendChild(box);
        }
    }
    //

    //li and input elements generator

    const ul = document.getElementById("myList");
    for (j = 0; j < 5; j++) {
        const li = document.createElement("li");
        li.classList.add("list_style")
        if (j == 0) {
            for (let i = 0; i < 40; i++) {
                const label = document.createElement("label");
                label.textContent = i + 1;
                label.style.marginBottom = "3px";
                li.appendChild(label)
            }
        } else {
            for (let i = 0; i < 40; i++) {
                const input = document.createElement("input");
                input.type = 'number';
                input.classList.add("unclickedinput")
                input.classList.add("hiddenelem")
                input.min = 0;
                input.max = 1;
                // input.onchange = function() {
                //     alert("thisisokay")
                // }
                // input.style.display = "none";
                li.appendChild(input);
            }
        }

        ul.appendChild(li);
    }

    //
    if (implusearr !== "0") {
        drawingImplus(newarr[0], container_first, "red");
        drawingImplus(newarr[1], container_second, "green");
        drawingImplus(newarr[2], container_third, "pink");
        drawingImplus(newarr[3], container_fourth, "black");
        const ulElement = document.querySelector("#myList");
        const liElements = ulElement.querySelectorAll("li");
        for (let i = 1; i < liElements.length; i++) {
            const inputElements = liElements[i].querySelectorAll("input");
            // if (i - 1 < newarr.length) {
            for (let j = 0; j < newarr[0].length; j++) {
                inputElements[j].value = Number(newarr[i - 1][j]);
                inputElements[j].classList.add('clickedinput');
            }
        }
        // }
    }
    indexarr = []
    const myInputs = document.querySelectorAll('.hiddenelem');
    const myUl = document.getElementById("myList");
    const mylist = myUl.querySelectorAll('li');
    myInputs.forEach(input => {
        input.addEventListener('click', function() {
            const li = this.parentElement;
            const inputsInLi = li.querySelectorAll('.hiddenelem');
            let currentIndex = Array.from(inputsInLi).indexOf(this);
            if (implusearr !== "0") {
                const savedarrlength = newarr[0].length
                if (indexarr.length == 0) {
                    if (savedarrlength - 1 < currentIndex) {
                        for (j = 1; j < mylist.length; ++j) {
                            const childinputs = mylist[j].children;
                            for (let i = savedarrlength - 1; i <= currentIndex; i++) {
                                childinputs[i].classList.add('clickedinput');
                                childinputs[i].value = 0
                            }
                        }
                        for (m = 0; m < currentIndex - savedarrlength + 1; m++) {
                            newarr[0].push("0")
                            newarr[1].push("0")
                            newarr[2].push("0")
                            newarr[3].push("0")
                        }
                        indexarr.push(currentIndex)
                        zerosArray_first = newarr[0];
                        zerosArray_second = newarr[1];
                        zerosArray_third = newarr[2];
                        zerosArray_fourth = newarr[3];
                    } else {
                        for (j = 1; j < mylist.length; ++j) {
                            const childinputs = mylist[j].children;
                            for (let i = 0; i < savedarrlength; i++) {
                                childinputs[i].classList.add('clickedinput');
                                childinputs[i].value = Number(newarr[j - 1][i])
                            }
                        }
                        indexarr.push(currentIndex)
                        zerosArray_first = newarr[0];
                        zerosArray_second = newarr[1];
                        zerosArray_third = newarr[2];
                        zerosArray_fourth = newarr[3];
                    }
                } else {
                    if (indexarr[indexarr.length - 1] < currentIndex) {
                        for (j = 1; j < mylist.length; ++j) {
                            const childinputs = mylist[j].children;
                            for (let i = indexarr[indexarr.length - 1] + 1; i <=
                                currentIndex; i++) {
                                childinputs[i].classList.add('clickedinput');
                                childinputs[i].value = 0
                            }
                        }
                        for (m = 0; m < currentIndex - indexarr[indexarr.length -
                                1]; m++) {
                            zerosArray_first.push(0)
                            zerosArray_second.push(0)
                            zerosArray_third.push(0)
                            zerosArray_fourth.push(0)
                        }
                        indexarr.push(currentIndex)
                    }
                }
            } else {
                if (indexarr.length == 0) {
                    for (j = 1; j < mylist.length; ++j) {
                        const childinputs = mylist[j].children;
                        for (let i = 0; i <= currentIndex; i++) {
                            childinputs[i].classList.add('clickedinput');
                            childinputs[i].value = 0
                        }
                    }
                    indexarr.push(currentIndex)
                    currentIndex = currentIndex
                    zerosArray_first = new Array(currentIndex + 1).fill(0);
                    zerosArray_second = new Array(currentIndex + 1).fill(0);
                    zerosArray_third = new Array(currentIndex + 1).fill(0);
                    zerosArray_fourth = new Array(currentIndex + 1).fill(0);
                } else {
                    if (indexarr[indexarr.length - 1] < currentIndex) {
                        for (j = 1; j < mylist.length; ++j) {
                            const childinputs = mylist[j].children;
                            for (let i = indexarr[indexarr.length - 1] + 1; i <=
                                currentIndex; i++) {
                                childinputs[i].classList.add('clickedinput');
                                childinputs[i].value = 0
                            }
                        }
                        for (m = 0; m < currentIndex - indexarr[indexarr.length -
                                1]; m++) {
                            zerosArray_first.push(0)
                            zerosArray_second.push(0)
                            zerosArray_third.push(0)
                            zerosArray_fourth.push(0)
                        }
                        indexarr.push(currentIndex)
                    }
                }
            }


            while (container_first.firstChild) {
                container_first.removeChild(container_first.firstChild);
            }
            while (container_second.firstChild) {
                container_second.removeChild(container_second.firstChild);
            }
            while (container_third.firstChild) {
                container_third.removeChild(container_third.firstChild);
            }
            while (container_fourth.firstChild) {
                container_fourth.removeChild(container_fourth.firstChild);
            }
            drawingImplus(zerosArray_first, container_first, "red");
            drawingImplus(zerosArray_second, container_second, "green");
            drawingImplus(zerosArray_third, container_third, "pink");
            drawingImplus(zerosArray_fourth, container_fourth, "black");
        });
    });



    (() => {
        const liElement = document.getElementById("myList");
        if (liElement.childElementCount > 0) {
            const inputElements = liElement.querySelectorAll('.hiddenelem');
            inputElements.forEach(inputelement => {
                inputelement.addEventListener('input', function(event) {
                    const inputValue = event.target.value;
                    var li_elem_parent = event.target.parentElement;
                    var li_elem_parent_index = Array.from(li_elem_parent.parentNode
                            .children)
                        .indexOf(li_elem_parent);
                    var clickedIndex = Array.from(event.target.parentNode.children)
                        .indexOf(
                            event.target);
                    switch (li_elem_parent_index) {
                        case 1:
                            zerosArray_first[clickedIndex] =
                                inputValue; // Update the corresponding value in the array
                            while (container_first.firstChild) {
                                container_first.removeChild(container_first
                                    .firstChild);
                            }
                            drawingImplus(zerosArray_first, container_first, "red");
                            break
                        case 2:
                            zerosArray_second[clickedIndex] =
                                inputValue; // Update the corresponding value in the array
                            while (container_second.firstChild) {
                                container_second.removeChild(container_second
                                    .firstChild);
                            }
                            drawingImplus(zerosArray_second, container_second,
                                "green");
                            break
                        case 3:
                            zerosArray_third[clickedIndex] =
                                inputValue; // Update the corresponding value in the array
                            while (container_third.firstChild) {
                                container_third.removeChild(container_third
                                    .firstChild);
                            }
                            drawingImplus(zerosArray_third, container_third,
                                "blue");
                            break
                        case 4:
                            zerosArray_fourth[clickedIndex] =
                                inputValue; // Update the corresponding value in the array
                            while (container_fourth.firstChild) {
                                container_fourth.removeChild(container_fourth
                                    .firstChild);
                            }
                            drawingImplus(zerosArray_fourth, container_fourth,
                                "black");
                            break
                    }

                });
            })

        }
    })()

    const myDiv = document.getElementById('interval'); // Select the div element by its ID dynamicdiv
    const dynamicdiv = document.getElementById('dynamicdiv');
    for (let i = 0; i < 70; i++) {
        const box = document.createElement('div'); // Create a new div element
        box.classList.add('box_interval'); // Add the "box" class to the div element
        const p = document.createElement('p')
        dynamicdiv.style.width = (70 * 45 + 150) + "px";
        p.textContent = i;
        box.appendChild(p);
        myDiv.appendChild(box); // Add the div element to the container element
    }
    ///txt file download

    save = document.getElementById("save");
    save.addEventListener("click", () => {
        const myUl = document.getElementById("myList");
        const mylist = myUl.querySelectorAll('li');
        let myArray = [];
        const index = indexarr[indexarr.length - 1]
        for (let i = 1; i < mylist.length; i++) {
            const element = mylist[i].querySelectorAll('input');
            let subarr = []
            for (let j = 0; j <= index; j++) {
                const ele = element[j].value;
                subarr.push(ele)
            }
            myArray.push(subarr)
        }
        const myArrayString = myArray.join(', ');
        $.ajax({
            url: "<?php echo base_url('developer/inser_arr_str'); ?>",
            method: "get",
            data: {
                id: developerfileid,
                str: myArrayString
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success',
                    text: 'SMT file is saved exactly',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false,
                    showCancelButton: false,
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    txtdownloadelem = document.getElementById("txtdownload");
    txtdownloadelem.addEventListener(
        "click",
        () => {
            if (Number(is_register_ID) == 1) {
                if (Number(status) === 1) {
                    const index = indexarr[indexarr.length - 1]
                    const myUl = document.getElementById("myList");
                    const mylist = myUl.querySelectorAll('li');
                    let myArray = [];
                    for (let i = 1; i < mylist.length; i++) {
                        const element = mylist[i].querySelectorAll('input');
                        let subarr = []
                        for (let j = 0; j < index; j++) {
                            const ele = element[j].value;
                            subarr.push(ele)
                        }
                        myArray.push(subarr)
                    }
                    const transposedMatrix = [];
                    for (let j = 0; j < myArray[0].length; j++) {
                        // Create a new row for the transposed matrix
                        transposedMatrix[j] = [];
                        // Iterate over the rows of the original matrix
                        for (let i = 0; i < myArray.length; i++) {
                            // Swap the row and column indices to transpose the element
                            transposedMatrix[j][i] = myArray[i][j];
                        }
                    }
                    let text = 'ID:' + equip_ID - 23457;
                    text += transposedMatrix.join('\n')
                    // const text = transposedMatrix.join('\n');
                    saveEncryptedDataToFile(text)
                    $.ajax({
                        url: "<?php echo base_url('user/addCount'); ?>",
                        method: "get",
                        data: {},
                        success: function(response) {

                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Warning',
                        text: 'Admin has not activated yet, please wait until then',
                        icon: 'error',
                        timer: 3000,
                        showConfirmButton: false,
                        showCancelButton: false,
                    });
                }

            } else {
                Swal.fire({
                    title: 'Warning',
                    text: 'You have not registred Equipment ID yet!',
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonText: 'Yes,I will register!',
                    cancelButtonText: 'Cancel',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?php echo base_url('user/smtgenerator'); ?>";
                    }
                })
            }

        })

    async function encryptData(str) {
        // Define the plaintext and key
        const plaintext = str;
        const key = '0123456789abcdef';

        // Convert the key from hex string to binary data
        const keyData = new TextEncoder().encode(key);

        // Generate the encryption key from the key data
        const aesKey = await crypto.subtle.importKey(
            'raw',
            keyData, {
                name: 'AES-CBC',
                length: 128
            },
            false,
            ['encrypt']
        );

        // Convert the plaintext to binary data
        const plaintextData = new TextEncoder().encode(plaintext);

        // Generate a random initialization vector
        const iv = crypto.getRandomValues(new Uint8Array(16));

        // Encrypt the plaintext with AES-CBC
        const encryptedData = await crypto.subtle.encrypt({
                name: 'AES-CBC',
                iv
            },
            aesKey,
            plaintextData
        );

        // Convert the encrypted data to base64-encoded ASCII text
        const base64Encoded = btoa(String.fromCharCode(...new Uint8Array(encryptedData)));
        console.log('=>>>>>>>>>>>>', base64Encoded);
        return JSON.stringify(base64Encoded);
    }

    encryptData().catch(error => {
        console.error(error);
    });

    async function saveEncryptedDataToFile(str) {
        try {
            const base64Encoded = await encryptData(str);
            const blob = new Blob([base64Encoded], {
                type: 'text/plain'
            });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.setAttribute('href', url);
            link.setAttribute('download', equip_ID + '.smt');
            link.click();
            URL.revokeObjectURL(url);
        } catch (error) {
            console.error(error);
        }
    }
    </script>