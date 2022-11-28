@php
     $major_count=0;
     $male_count=0;
     $female_count=0; 
     $university_c=0;
     $name='hh';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $i=0;
            foreach ($university as  $universitys) {
                if($_POST['unvirsty']==$universitys->id)
                {
                  $university_c = $count_university[$i];
                  $name=$universitys->name;
                  break;
                }
        $i++;

       }
       $i=0;
            foreach ($majors as  $major) {
                if($_POST['major']==$major->id)
                {
                  $major_count = $count_major[$i];
                }
        $i++;

       } 
            foreach ($trainee as  $traine) {
                    for($i=1;$i <=7 ; $i++){
                        if($_POST['training'] == $i )
                           { 
                              $male_count = $count_male[$i];
                              break;
                           }
                    }   
       }
       foreach ($trainee as  $traine) {
                    for($i=1;$i <=7 ; $i++){
                        if($_POST['training'] == $i )
                           { 
                              $female_count = $count_female[$i];
                              break;
                           }
                    }   
       }
       }
    
@endphp

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
    <link rel="stylesheet" href="{{ asset('assest/Project04.css') }}">
    <link rel="icon" href="../image/logo geeks 360-01.svg">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<body>
<div class="container">

        <div class="FormAll">
            
            <form action="{{ route('report.action.view') }}" method="POST">
                @csrf
                <h1>Report</h1>

<!-- ******************************************************** -->
                <hr>
                @php
                    
                @endphp
                <div class="Div-FormAll">
                    <label for="tn"> Training name</label>
                    <select class="SL2" name="training" id="tn">
                        @foreach ($courses as $cours)
                        <option value="{{ $cours->id }}" @isset($_POST['training'])
                            @php echo $_POST['training']==$cours->id?'selected':''; @endphp @endisset >{{ $cours->name }}</option>
                        
                        @endforeach
                   </select>                      
                </div>
                <div class="Div-FormAll">
                    <div class="All-gender">
                        <div class="gender">
                            <label class="label1" for="">Male </label>
                            <input type="text" placeholder="999" name="male" value="{{ $male_count }}">
                        </div>
                        <div class="gender">
                            <label for="">Female  </label>
                            <input type="text" placeholder="999" name="femal" value="{{ $female_count }}">
                        </div>
                    </div>
                </div>

                <hr>

<!-- ******************************************************** -->

                <div class="Div-FormAll">
                    <label for="book">University Name</label>
                    <div class="All-gender2">
                        <select class="SL" name="unvirsty" id="book">
                            {{-- <option value="name1" selected>Choose the name of the University</option> --}}
                            @foreach ($university as $uni)
                            <option value="{{ $uni->id }}" @isset($_POST['unvirsty']) @php echo $_POST['unvirsty']==$uni->id?'selected':'' @endphp @endisset>{{ $uni->name }}</option>
                            @endforeach
                       </select>   
                            <label for="">Beneficiaries</label>
                            <input type="text" placeholder="999" name="number-of-beneficiaries" value={{ $university_c }}>
                    </div>
                </div>

                <hr>

<!-- ******************************************************** -->

                <div class="Div-FormAll">
                    <label for="book">Your academic major</label>
                    <div class="All-gender2">
                        <select class="SL" id="book" name="major">
                            @foreach ($majors as $major)
                            <option value="{{ $major->id}}"   @isset($_POST['major']) @php echo $_POST['major']==$major->id?'selected':'' @endphp @endisset >{{ $major->name }}</option>
                            @endforeach
                       </select>   
                    <label for="">Beneficiaries</label>
                    <input type="text" placeholder="999" name="users-number" value="{{ $major_count  }}">
                </div>
                </div>   
                <hr>   
                <input type="submit" value="submit" class="btn">
            </form>
    

        </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>


</body>
</html>