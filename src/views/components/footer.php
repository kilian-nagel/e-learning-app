

<?php 

function getFooter(){
    $date = Date("Y");
    return "       
    <footer id='footer' class='border-top border-primary-subtle p-3'>
        <div class='links d-flex gap-3'>
            <ul class='items nav d-flex flex-column'>
                <li class='nav-item'><a href='' class='nav-link p-0 pb-1'>Home</a></li>
                <li class='nav-item'><a href='' class='nav-link p-0 pb-1'>Course</a></li>
                <li class='item'><a href='' class='nav-link p-0 pb-1'>About</a></li>
            </ul>
            <ul class='items nav d-flex flex-column'>
                <li class='nav-item'><a href='' class='p-0 pb-1 nav-link'>Home</a></li>
                <li class='nav-item'><a href='' class='p-0 pb-1 nav-link'>Course</a></li>
                <li class='nav-item'><a href='' class='p-0 pb-1 nav-link'>About</a></li>
            </ul>
            <ul class='items nav d-flex flex-column'>
                <li class='nav-item'><a href='' class='p-0 pb-1 nav-link'>Home</a></li>
                <li class='nav-item'><a href='' class='p-0 pb-1 nav-link'>Course</a></li>
                <li class='nav-item'><a href='' class='p-0 pb-1 nav-link'>About</a></li>
            </ul>
        </div>
        <p class='disclaimer pt-3'>© Copyright {$date}, e-learning.</p>
    </footer>    
    ";
}