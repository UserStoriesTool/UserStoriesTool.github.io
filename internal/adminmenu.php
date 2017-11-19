<?php	
	print "<h4>Admin Menu</h4>";
?>
<hr/>
<ul class="nav nav-pills flex-column">
	<li class="nav-item">
      <a class="nav-link" href="?p=customers">Customers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?p=orders">Orders</a>
    </li>
</ul>
<hr/>
<?php
	print "<h4>User Menu</h4>";				
?>
<hr/>
<ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="?p=myorders">My Orders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?p=mydetails">My Details</a>
    </li>
    <li>
    	<a class="nav-link" href="?p=logout">Logout</a>
    </li>
</ul>      
<hr/>
