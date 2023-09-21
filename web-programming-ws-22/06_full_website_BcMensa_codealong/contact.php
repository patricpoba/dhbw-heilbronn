<?php include('layout-header.php');?>

<section class="bg-light"> 
    <div class="container py-3"> 
        <h1>Contact Us</h1> 
    </div>
</section> 

<main>
    <div class="container">
        <p id="demo">content goe herer</p> 
    </div>

    <!-- Maps section -->
    <div class="container">
        
    <button class="btn btn-primary" type="button" 
        onclick="myFunction('1st')">Change Paragraph Text</button>

        <h2 id="greeting">Guten Hunger!</h2>

    </div>

    <!-- business details -->
    <div class="container">
        <div class="row">

            <!-- address -->
            <div class="col-md-6">

            </div>

            <!-- email -->
            <div class="col-md-6">

            </div>

            <!-- web form -->
            <div class="row">
                <div class="col-md-12">

                </div>
            </div> 
        </div>
    </div>

</main>

<script>
    // alert('Hello Javascript World'); 
    console.log('Some information for the console');
    let number1 = 5;
    let number2 = 10;
    console.log(number1 + number2);

    function myFunction(param){
        document.getElementById('greeting').innerHTML = 'Stabil 👍 ';
    }

    document.getElementById('myForm').onsubmit = function(){
        let name = document.getElementById('formName').value; 
        let message = document.getElementById('formMessage').value; 

        if (name == '') {
            alert('Please type you rname');
            return false;
        }
 
        if (message == '') {
            alert('Please type you rname');
            return false;
        }

        return true;
    }
</script>
<?php include('layout-footer.php'); ?>