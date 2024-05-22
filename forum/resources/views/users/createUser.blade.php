@extends("layouts.get")

@section('header' , 'Criar um usuário')

@section('content')
    <form action="">
        <Label>Nome do usuário</Label>
        <input type="text" name="textName" id="textId">

        <Label>Email do usuário</Label>
        <input type="email" name="emailName" id="emailId">

        <input type="submit" value="Enviar">
    </form>

@section('footer', '16:34 22/05/2022')