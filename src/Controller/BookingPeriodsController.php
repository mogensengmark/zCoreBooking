<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BookingPeriods Controller
 *
 * @property \App\Model\Table\BookingPeriodsTable $BookingPeriods
 */
class BookingPeriodsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->BookingPeriods->find();
        $bookingPeriods = $this->paginate($query);

        $this->set(compact('bookingPeriods'));
    }

    /**
     * View method
     *
     * @param string|null $id Booking Period id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bookingPeriod = $this->BookingPeriods->get($id, contain: []);
        $this->set(compact('bookingPeriod'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bookingPeriod = $this->BookingPeriods->newEmptyEntity();
        if ($this->request->is('post')) {
            $bookingPeriod = $this->BookingPeriods->patchEntity($bookingPeriod, $this->request->getData());
            if ($this->BookingPeriods->save($bookingPeriod)) {
                $this->Flash->success(__('The booking period has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking period could not be saved. Please, try again.'));
        }
        $this->set(compact('bookingPeriod'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Booking Period id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bookingPeriod = $this->BookingPeriods->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookingPeriod = $this->BookingPeriods->patchEntity($bookingPeriod, $this->request->getData());
            if ($this->BookingPeriods->save($bookingPeriod)) {
                $this->Flash->success(__('The booking period has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking period could not be saved. Please, try again.'));
        }
        $this->set(compact('bookingPeriod'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Booking Period id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bookingPeriod = $this->BookingPeriods->get($id);
        if ($this->BookingPeriods->delete($bookingPeriod)) {
            $this->Flash->success(__('The booking period has been deleted.'));
        } else {
            $this->Flash->error(__('The booking period could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
