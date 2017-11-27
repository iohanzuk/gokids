<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EstabelecimentoCaracteristicas Controller
 *
 * @property \App\Model\Table\EstabelecimentoCaracteristicasTable $EstabelecimentoCaracteristicas
 *
 * @method \App\Model\Entity\EstabelecimentoCaracteristica[] paginate($object = null, array $settings = [])
 */
class EstabelecimentoCaracteristicasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Estabelecimentos', 'Caracteristicas', 'Users']
        ];
        $estabelecimentoCaracteristicas = $this->paginate($this->EstabelecimentoCaracteristicas);

        $this->set(compact('estabelecimentoCaracteristicas'));
        $this->set('_serialize', ['estabelecimentoCaracteristicas']);
    }

    /**
     * View method
     *
     * @param string|null $id Estabelecimento Caracteristica id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estabelecimentoCaracteristica = $this->EstabelecimentoCaracteristicas->get($id, [
            'contain' => ['Estabelecimentos', 'Caracteristicas', 'Users']
        ]);

        $this->set('estabelecimentoCaracteristica', $estabelecimentoCaracteristica);
        $this->set('_serialize', ['estabelecimentoCaracteristica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estabelecimentoCaracteristica = $this->EstabelecimentoCaracteristicas->newEntity();
        if ($this->request->is('post')) {
            $estabelecimentoCaracteristica = $this->EstabelecimentoCaracteristicas->patchEntity($estabelecimentoCaracteristica, $this->request->data);
            if ($this->EstabelecimentoCaracteristicas->save($estabelecimentoCaracteristica)) {
                $this->Flash->success(__('The {0} has been saved.', 'Estabelecimento Caracteristica'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Estabelecimento Caracteristica'));
            }
        }
        $estabelecimentos = $this->EstabelecimentoCaracteristicas->Estabelecimentos->find('list', ['limit' => 200]);
        $caracteristicas = $this->EstabelecimentoCaracteristicas->Caracteristicas->find('list', ['limit' => 200]);
        $users = $this->EstabelecimentoCaracteristicas->Users->find('list', ['limit' => 200]);
        $this->set(compact('estabelecimentoCaracteristica', 'estabelecimentos', 'caracteristicas', 'users'));
        $this->set('_serialize', ['estabelecimentoCaracteristica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estabelecimento Caracteristica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estabelecimentoCaracteristica = $this->EstabelecimentoCaracteristicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estabelecimentoCaracteristica = $this->EstabelecimentoCaracteristicas->patchEntity($estabelecimentoCaracteristica, $this->request->data);
            if ($this->EstabelecimentoCaracteristicas->save($estabelecimentoCaracteristica)) {
                $this->Flash->success(__('The {0} has been saved.', 'Estabelecimento Caracteristica'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Estabelecimento Caracteristica'));
            }
        }
        $estabelecimentos = $this->EstabelecimentoCaracteristicas->Estabelecimentos->find('list', ['limit' => 200]);
        $caracteristicas = $this->EstabelecimentoCaracteristicas->Caracteristicas->find('list', ['limit' => 200]);
        $users = $this->EstabelecimentoCaracteristicas->Users->find('list', ['limit' => 200]);
        $this->set(compact('estabelecimentoCaracteristica', 'estabelecimentos', 'caracteristicas', 'users'));
        $this->set('_serialize', ['estabelecimentoCaracteristica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estabelecimento Caracteristica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estabelecimentoCaracteristica = $this->EstabelecimentoCaracteristicas->get($id);
        if ($this->EstabelecimentoCaracteristicas->delete($estabelecimentoCaracteristica)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Estabelecimento Caracteristica'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Estabelecimento Caracteristica'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
