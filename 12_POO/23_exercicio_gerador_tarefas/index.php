<?php

// Crie uma classe chamada Task que represente uma tarefa
//A classe Task deve ter os seguintes atributos:
//title: título da tarefa.
//description: descrição da tarefa.
//completed: indica se a tarefa está concluída ou não.
//A classe Task deve ter os seguintes métodos:
//markAsCompleted(): marca a tarefa como concluída.
//markAsIncomplete(): marca a tarefa como não concluída.
//getTitle(): retorna o título da tarefa.
//getDescription(): retorna a descrição da tarefa.
//isCompleted(): retorna um booleano indicando se a tarefa está concluída ou não.

    class Task {
        private $title;
        private $description;
        private $completed;

        //construtor para inicializar os atributos da classe
        public function __construct($title, $description) {
            $this->title = $title;
            $this->description = $description;
            $this->completed = false; //Inicialmente, a tarefa nao está concluída
        }

        //Método para marcar a tarefa como concluída
        public function markAsCompleted() {
            $this->completed = true;
        }

        //Método para marcar a tarefa como não concluída
        public function markAsIncomplete() {
            $this->completed = false;
        }

        //Método para retornar o título da tarefa
        public function getTitle() {
            return $this->title;
        }

        //Método para retornar a desccrição da tarefa
        public function getDescription() {
            return $this->description;
        }

        //Método para verificar se a tarefa está concluída
        public function isCompleted() {
            return $this->completed;
        }
    }

    //exemplo de uso

    $task = new Task("Comprar leite", "Comprar leite no supermercado.");
    echo $task->getTitle() . "<br>";
    echo $task->getDescription() . "<br>";
    echo $task->isCompleted() ? 'Concluída <br>' : 'Não concluída <br>';

    $task->markAsCompleted();
    echo $task->isCompleted() ? 'Concluída <br>' : 'Não concluída <br>';

    $task->markAsIncomplete();
    echo $task->isCompleted() ? 'Concluída <br>' : 'Não concluída <br>';


    
