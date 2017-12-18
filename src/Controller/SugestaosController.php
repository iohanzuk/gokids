<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sugestaos Controller
 *
 * @property \App\Model\Table\SugestaosTable $Sugestaos
 *
 * @method \App\Model\Entity\Sugestao[] paginate($object = null, array $settings = [])
 */
class SugestaosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $sugestaos = $this->Sugestaos->find('all');

        $this->set(compact('sugestaos'));
        $this->set('_serialize', ['sugestaos']);
    }

    /**
     * View method
     *
     * @param string|null $id Sugestao id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sugestao = $this->Sugestaos->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('sugestao', $sugestao);
        $this->set('_serialize', ['sugestao']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sugestao = $this->Sugestaos->newEntity();
        if ($this->request->is('post')) {
            $sugestao = $this->Sugestaos->patchEntity($sugestao, $this->request->data);
            if ($this->Sugestaos->save($sugestao)) {
                $this->Flash->success(__('The {0} has been saved.', 'Sugestao'));
                return $this->redirect(['controller'=>'Estabelecimentos','action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Sugestao'));
            }
        }
        $users = $this->Sugestaos->Users->find('list', ['limit' => 200]);
        $this->set(compact('sugestao', 'users'));
        $this->set('_serialize', ['sugestao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sugestao id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sugestao = $this->Sugestaos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sugestao = $this->Sugestaos->patchEntity($sugestao, $this->request->data);
            if ($this->Sugestaos->save($sugestao)) {
                $this->Flash->success(__('The {0} has been saved.', 'Sugestao'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Sugestao'));
            }
        }
        $users = $this->Sugestaos->Users->find('list', ['limit' => 200]);
        $this->set(compact('sugestao', 'users'));
        $this->set('_serialize', ['sugestao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sugestao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sugestao = $this->Sugestaos->get($id);
        if ($this->Sugestaos->delete($sugestao)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Sugestao'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Sugestao'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
