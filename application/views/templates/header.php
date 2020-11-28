<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ciBlog</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css') ?>">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">ciBlog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url(); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('posts'); ?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('categories'); ?>">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('posts/create'); ?>">Create Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('categories/create'); ?>">Create Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('login'); ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('register'); ?>">Register</a>
                </li>
            </ul>
        </div>
    </nav><br>
    <div class="container">
        <?php if($this->session->flashdata('user_registered')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('user_registered'); ?>
            </p>
        <?php endif;?>
        <?php if($this->session->flashdata('post_created')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('post_created'); ?>
            </p>
        <?php endif;?>
        <?php if($this->session->flashdata('post_udpated')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('post_updated'); ?>
            </p>
        <?php endif;?>
        <?php if($this->session->flashdata('post_deleted')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('post_deleted'); ?>
            </p>
        <?php endif;?>
        <?php if($this->session->flashdata('category_created')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('category_created'); ?>
            </p>
        <?php endif;?>