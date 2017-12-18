<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Avaliacaos Controller
 *
 * @property \App\Model\Table\AvaliacaosTable $Avaliacaos
 *
 * @method \App\Model\Entity\Avaliacao[] paginate($object = null, array $settings = [])
 */
class AvaliacaosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Estabelecimentos', 'Users']
        ];
        $avaliacaos = $this->paginate($this->Avaliacaos);

        $this->set(compact('avaliacaos'));
        $this->set('_serialize', ['avaliacaos']);
    }

    /**
     * View method
     *
     * @param string|null $id Avaliacao id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avaliacao = $this->Avaliacaos->get($id, [
            'contain' => ['Estabelecimentos', 'Users']
        ]);

        $this->set('avaliacao', $avaliacao);
        $this->set('_serialize', ['avaliacao']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avaliacao = $this->Avaliacaos->newEntity();
        if ($this->request->is('post')) {
            $avaliacao = $this->Avaliacaos->patchEntity($avaliacao, $this->request->data);
            $avaliacao->user_id = $this->Auth->user('id');
            if ($this->Avaliacaos->save($avaliacao)) {
                $this->Flash->success(__('A {0} foi cadastrada com sucesso.', 'Avaliação'));
                return $this->redirect(['controller' => 'Estabelecimentos', 'action' => 'view', $avaliacao->estabelecimento_id]);
            } else {
                $this->Flash->error(__('Houve um problema no cadastro de sua {0}. Tente novamente mais tarde', 'Avaliação'));
            }
        }
        $estabelecimentos = $this->Avaliacaos->Estabelecimentos->find('list', ['limit' => 200]);
        $users = $this->Avaliacaos->Users->find('list', ['limit' => 200]);
        $this->set(compact('avaliacao', 'estabelecimentos', 'users'));
        $this->set('_serialize', ['avaliacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Avaliacao id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avaliacao = $this->Avaliacaos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avaliacao = $this->Avaliacaos->patchEntity($avaliacao, $this->request->data);
            if ($this->Avaliacaos->save($avaliacao)) {
                $this->Flash->success(__('The {0} has been saved.', 'Avaliacao'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Avaliacao'));
            }
        }
        $estabelecimentos = $this->Avaliacaos->Estabelecimentos->find('list', ['limit' => 200]);
        $users = $this->Avaliacaos->Users->find('list', ['limit' => 200]);
        $this->set(compact('avaliacao', 'estabelecimentos', 'users'));
        $this->set('_serialize', ['avaliacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Avaliacao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avaliacao = $this->Avaliacaos->get($id);
        if ($this->Avaliacaos->delete($avaliacao)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Avaliacao'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Avaliacao'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
