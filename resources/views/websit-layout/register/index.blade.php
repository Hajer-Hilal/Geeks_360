<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Geeks360</title>
    <!-- family = Bangers -->
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assest/Project03.css') }}">
    <link rel="icon" href="../image/logo geeks 360-01.svg">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<body>
<div class="container">



        <div class="FormAll">

                <!-- the box 1  -->
            <div class="form-title">
                <h1>Create an account</h1>
                <p>Do you have an account ? <a href="#">Sign in .</a></p>
            </div>
                <!-- end box 1  -->


                <!-- the form box  -->
        <form action="{{ route('register.view') }}" method="POST">
          @csrf
            <div class="section-One">


                <!-- the box 2  -->
                <div class="div-section-One">
                <label for="">ID </label>
                <input name='trainee_id' type="text" placeholder="s00001" required >
                </div>
                <div class="div-section-One">
                    <label for=""> Full Name</label>
                    <input name='full_name' type="text" placeholder="Mohamed Mahmod Alahmad" required>
                </div>
                <div class="div-section-One">
                    <label for=""> Phone Number </label>
                    <input name='phone' type="number" placeholder="111 111 111 0900" required>
                </div>
                <div class="div-section-One">
                    <label for=""> Email</label>
                    <input name='email' type="email" placeholder="email@gmail.com" required> 
                </div>
                <div class="div-section-two">
                    <label for="">Gender</label>
                    <div class="gender-All">
                        <div>
                            <label for="male" class="gender"  > Male </label>
                            <input id="male" class="input-gender" type="radio" name="gender" value="male" >
                        </div>
                        <div>
                            <label for="female" class="gender"> Female </label>
                            <input id="female" class="input-gender" type="radio" name="gender" value="female" >
                        </div>
                    </div>
                </div>           
            </div>
                <!-- end box 2  -->



                <!-- the box 3  -->
            <div class="second-section">
                <div class="div-second-section">
                    <label for=""> Your academic major (if any)</label>
                    <select class="SL2" name="major" id="book">
                        @foreach ($majors as $major)
                        <option value="{{ $major->id }}">{{ $major->name }}</option>
                        @endforeach
                   </select> 
                </div>
                <div class="div-second-section">
                        <label for=""> University Name </label>
                        <select class="SL2" name="University_id" id="book">
                            @foreach ($university as $uni)
                            <option value="{{ $uni->id }}">{{ $uni->name }}</option>
                            @endforeach
                          
                       </select>                 
                    </div>
                <div class="div-second-section">
                        <label for=""> Training name </label>
                        <select class="SL2" name="Course_id" id="book">
                            @foreach ($courses as $cours)
                            <option value="{{ $cours->id }}">{{ $cours->name }}</option>
                            @endforeach
                       </select>                 </div>         
            </div>
            <!-- end box 3  -->



            <!-- the box 4  -->
        <input type="submit" value="submit" class="btn">
            <!-- end box 4  -->
    </form>




        <!-- end form box  -->
</div>


    
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>