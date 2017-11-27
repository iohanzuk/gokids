<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estabelecimentos Controller
 *
 * @property \App\Model\Table\EstabelecimentosTable $Estabelecimentos
 *
 * @method \App\Model\Entity\Estabelecimento[] paginate($object = null, array $settings = [])
 */
class EstabelecimentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias', 'Users']
        ];
        $estabelecimentos = $this->paginate($this->Estabelecimentos);

        $this->set(compact('estabelecimentos'));
        $this->set('_serialize', ['estabelecimentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estabelecimento = $this->Estabelecimentos->get($id, [
            'contain' => ['Categorias', 'Users', 'Avaliacaos', 'EstabelecimentoCaracteristicas']
        ]);

        $this->set('estabelecimento', $estabelecimento);
        $this->set('_serialize', ['estabelecimento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estabelecimento = $this->Estabelecimentos->newEntity();
        if ($this->request->is('post')) {
            $estabelecimento = $this->Estabelecimentos->patchEntity($estabelecimento, $this->request->data);
            if ($this->Estabelecimentos->save($estabelecimento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Estabelecimento'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Estabelecimento'));
            }
        }
        $categorias = $this->Estabelecimentos->Categorias->find('list', ['limit' => 200]);
        $users = $this->Estabelecimentos->Users->find('list', ['limit' => 200]);
        $this->set(compact('estabelecimento', 'categorias', 'users'));
        $this->set('_serialize', ['estabelecimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estabelecimento = $this->Estabelecimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estabelecimento = $this->Estabelecimentos->patchEntity($estabelecimento, $this->request->data);
            if ($this->Estabelecimentos->save($estabelecimento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Estabelecimento'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Estabelecimento'));
            }
        }
        $categorias = $this->Estabelecimentos->Categorias->find('list', ['limit' => 200]);
        $users = $this->Estabelecimentos->Users->find('list', ['limit' => 200]);
        $this->set(compact('estabelecimento', 'categorias', 'users'));
        $this->set('_serialize', ['estabelecimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estabelecimento = $this->Estabelecimentos->get($id);
        if ($this->Estabelecimentos->delete($estabelecimento)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Estabelecimento'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Estabelecimento'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
