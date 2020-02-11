<?php

declare(strict_types=1);

namespace App\Tests\Form\Type;

use App\Entity\Task;
use App\Entity\User;
use App\Form\TaskType;
use Symfony\Component\Form\Test\TypeTestCase;

class TaskTypeTest extends TypeTestCase
{
    public function testWithGoodData(){
        $formData = [
            'title' => 'test title',
            'content' => 'test content',
            
        ];
        
        $user = $this->createMock(User::class);
        $taskToCompare = new Task();
        $taskToCompare->setUser($user);
        
        $form = $this->factory->create(TaskType::class, $taskToCompare);

        $task = new Task();
        $task->setTitle('test title');
        $task->setContent('test content');
        $task->isDone(false);
        $task->setUser($user);
        $task->setCreatedAt($taskToCompare->getCreatedAt());

        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());

        $this->assertEquals($task, $taskToCompare);

        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }

    }
}


