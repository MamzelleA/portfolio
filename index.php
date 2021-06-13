<?php

if (isset($_GET['action']))
{
	if ($_GET['action'] == 'portfolio')
	{
		require ('view/portfolio_view.php');
	}
	elseif ($_GET['action'] == 'projet1')
	{
		require('view/projet1_view.php');
	}
	elseif ($_GET['action'] == 'projet2')
	{
		require('view/projet2_view.php');
	}
	elseif ($_GET['action'] == 'projet3')
	{
		require('view/projet3_view.php');
	}	elseif ($_GET['action'] == 'projet4')
	{
		require('view/projet4_view.php');
	}	elseif ($_GET['action'] == 'projet5')
	{
		require('view/projet5_view.php');
	}
	elseif ($_GET['action'] == 'projet6')
	{
	require('view/projet6_view.php');
	}
	elseif ($_GET['action'] == 'skills')
	{
		require('view/skills_view.php');
	}
	elseif ($_GET['action'] == 'resume')
	{
		require('view/resume_view.php');
	}
	elseif ($_GET['action'] == 'contact')
	{
		require('view/contact_view.php');
	}
	elseif ($_GET['action'] == 'legal')
	{
		require('view/legal_view.php');
	}
}
elseif (empty($_GET['action']))
{
	require ('view/home_view.php');
}
