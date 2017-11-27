<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserTipos Controller
 *
 * @property \App\Model\Table\UserTiposTable $UserTipos
 *
 * @method \App\Model\Entity\UserTipo[] paginate($object = null, array $settings = [])
 */
class UserTiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $userTipos = $this->paginate($this->UserTipos);

        $this->set(compact('userTipos'));
        $this->set('_serialize', ['userTipos']);
    }

    /**
     * View method
     *
     * @param string|null $id User Tipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userTipo = $this->UserTipos->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userTipo', $userTipo);
        $this->set('_serialize', ['userTipo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userTipo = $this->UserTipos->newEntity();
        if ($this->request->is('post')) {
            $userTipo = $this->UserTipos->patchEntity($userTipo, $this->request->data);
            if ($this->UserTipos->save($userTipo)) {
                $this->Flash->success(__('The {0} has been saved.', 'User Tipo'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User Tipo'));
            }
        }
        $this->set(compact('userTipo'));
        $this->set('_serialize', ['userTipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Tipo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userTipo = $this->UserTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userTipo = $this->UserTipos->patchEntity($userTipo, $this->request->data);
            if ($this->UserTipos->save($userTipo)) {
                $this->Flash->success(__('The {0} has been saved.', 'User Tipo'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User Tipo'));
            }
        }
        $this->set(compact('userTipo'));
        $this->set('_serialize', ['userTipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Tipo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userTipo = $this->UserTipos->get($id);
        if ($this->UserTipos->delete($userTipo)) {
            $this->Flash->success(__('The {0} has been deleted.', 'User Tipo'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'User Tipo'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
