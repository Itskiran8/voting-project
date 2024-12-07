<?php
include "header.php";
?>

<body>
<div class="row" id="promise-education" style="background-image: url(img/promises1.jpg);
background-repeat: no-repeat;
background-size:auto; height:940px; font-family:cursive;">
    <div class="col-lg-12  " style="margin-top:20%;font-size:30px;padding-left:135px;padding-right:135px;line-height: 50px;">
        <h1 class="text-center mb-5 ">Education</h1> 
        <p id="educationText" contenteditable="false">The Indian government has promised to provide scholarships for quality education. They have pledged to offer education loans for children's <br>studies  and vowed to establish good colleges and appoint experienced teachers in states lacking quality educational institutions.</p>
        <div class="col-lg-12 mt-5 text-center"> 
        <button id="editBtn" class="btn btn-success">Edit</button>
        <button id="saveBtn" class="btn btn-primary d-none">Save</button>
 </div> 
    </div>
    
</div>

<script>
    // JavaScript code to handle the edit button click and enable editing
    document.getElementById('editBtn').addEventListener('click', function() {
        // Make the paragraph editable
        document.getElementById('educationText').setAttribute('contenteditable', 'true');
        // Show the save button and hide the edit button
        document.getElementById('editBtn').classList.add('d-none');
        document.getElementById('saveBtn').classList.remove('d-none');
    });

    // JavaScript code to handle the save button click
    document.getElementById('saveBtn').addEventListener('click', function() {
        // Disable editing
        document.getElementById('educationText').setAttribute('contenteditable', 'false');
        // Hide the save button and show the edit button
        document.getElementById('saveBtn').classList.add('d-none');
        document.getElementById('editBtn').classList.remove('d-none');

        // Optionally, you can save the edited content to a database or perform further actions here
        var editedContent = document.getElementById('educationText').innerText;
        // For demonstration purposes, you can log the edited content to console
        console.log('Edited content:', editedContent);
    });
</script>

</body>

<?php
include "footer.php";
?>
