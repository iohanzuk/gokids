<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Caracteristicas Controller
 *
 * @property \App\Model\Table\CaracteristicasTable $Caracteristicas
 *
 * @method \App\Model\Entity\Caracteristica[] paginate($object = null, array $settings = [])
 */
class CaracteristicasController extends AppController
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
        $caracteristicas = $this->paginate($this->Caracteristicas);

        $this->set(compact('caracteristicas'));
        $this->set('_serialize', ['caracteristicas']);
    }

    /**
     * View method
     *
     * @param string|null $id Caracteristica id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caracteristica = $this->Caracteristicas->get($id, [
            'contain' => ['Users', 'EstabelecimentoCaracteristicas']
        ]);

        $this->set('caracteristica', $caracteristica);
        $this->set('_serialize', ['caracteristica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caracteristica = $this->Caracteristicas->newEntity();
        if ($this->request->is('post')) {
            $caracteristica = $this->Caracteristicas->patchEntity($caracteristica, $this->request->data);
            if ($this->Caracteristicas->save($caracteristica)) {
                $this->Flash->success(__('The {0} has been saved.', 'Caracteristica'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Caracteristica'));
            }
        }
        $users = $this->Caracteristicas->Users->find('list', ['limit' => 200]);
        $this->set(compact('caracteristica', 'users'));
        $this->set('_serialize', ['caracteristica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Caracteristica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caracteristica = $this->Caracteristicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caracteristica = $this->Caracteristicas->patchEntity($caracteristica, $this->request->data);
            if ($this->Caracteristicas->save($caracteristica)) {
                $this->Flash->success(__('The {0} has been saved.', 'Caracteristica'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Caracteristica'));
            }
        }
        $users = $this->Caracteristicas->Users->find('list', ['limit' => 200]);
        $this->set(compact('caracteristica', 'users'));
        $this->set('_serialize', ['caracteristica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Caracteristica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caracteristica = $this->Caracteristicas->get($id);
        if ($this->Caracteristicas->delete($caracteristica)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Caracteristica'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Caracteristica'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
