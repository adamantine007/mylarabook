<?php


use Larabook\Statuses\StatusRepository;
use Laracasts\TestDummy\Factory as TestDummy;

class StatusRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    protected $repository;

    protected function _before()
    {
        $this->repository = new StatusRepository;
    }


    /** @test */
    public function it_get_all_statuses_for_a_user()
    {
        // Given I have 2 users
        $users = TestDummy::times(2)->create('Larabook\Users\User');

        // and statuses for both them
        TestDummy::times(2)->create('Larabook\Statuses\Status', [
            'user_id' => $users[0]->id,
            'body' => 'My status'
        ]);

        TestDummy::times(2)->create('Larabook\Statuses\Status', [
            'user_id' => $users[1]->id,
            'body' => 'His status'
        ]);

        // When I fetch statuses for one user
        $statuses = $this->repository->getAllForUSer($users[0]);

        // Then I should receive only the relevant ones
        $this->assertCount(2, $statuses);
        $this->assertEquals('My status', $statuses[0]->body);
        $this->assertEquals('My status', $statuses[1]->body);
    }

    /** @test */
    public function it_save_a_status_for_a_user()
    {
        // Given I have an unsaved status
        $status = TestDummy::create('Larabook\Statuses\Status', [
            'user_id' => null,
            'body' => 'My status'
        ]);

        // And an existing user
        $user = TestDummy::create('Larabook\Users\User');

        // When a try to persist this status
        $savedStatus = $this->repository->save($status, $user->id);

        // Then it should be saved
        $this->tester->seeRecord('statuses', [
            'body' => 'My status'
        ]);

        // And the status should have the correct user_id
        $this->assertEquals($user->id, $savedStatus->user_id);
    }

}