<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap 5.1 CSS -->
    <style>
        .steps {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    position: relative;
}
.step-button {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: none;
    background-color: rgb(37, 34, 235);
    color: #fff;
    transition: .4s;
}
.step-button[aria-expanded="true"] {
    width: 60px;
    height: 60px;
    background-color: rgb(37, 34, 235);
    color: #fff;
}
.done {
    background-color: green;
    color: #fff;
}
.step-item {
    z-index: 10;
    text-align: center;
}
#progress {
  -webkit-appearance:none;
    position: absolute;
    width: 95%;
    z-index: 5;
    height: 10px;
    margin-left: 18px;
    margin-bottom: 18px;
}
/* to customize progress bar */
#progress::-webkit-progress-value {
    background-color: green;
    transition: .5s ease;
}
#progress::-webkit-progress-bar {
    background-color: var(--prm-gray);

}
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
        <div class="steps mx-auto" style="width: 50vmax;">
            <progress id="progress" value=0 max=100 ></progress>
            <div class="step-item">
                <button class="step-button text-center" type="button">
                    1
                </button>
                <div class="step-title">
                    First Step
                </div>
            </div>
            <div class="step-item">
                <button class="step-button text-center collapsed" type="button">
                    2
                </button>
                <div class="step-title">
                    Second Step
                </div>
            </div>
            <div class="step-item">
                <button class="step-button text-center collapsed" type="button">
                    3
                </button>
                <div class="step-title">
                    Third Step
                </div>
            </div>
        </div>
        
      
    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Stepper JavaScript -->
    <script>
        const stepButtons = document.querySelectorAll('.step-button');
        const progress = document.querySelector('#progress');

        Array.from(stepButtons).forEach((button,index) => {
        button.addEventListener('click', () => {
            progress.setAttribute('value', index * 100 /(stepButtons.length - 1) );//there are 3 buttons. 2 spaces.

                stepButtons.forEach((item, secindex)=>{
                    if(index > secindex){
                        item.classList.add('done');
                    }
                    if(index < secindex){
                        item.classList.remove('done');
                    }
                })
            })
        })

    </script>
</body>
</html>