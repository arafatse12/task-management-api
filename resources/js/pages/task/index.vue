<template>
    <div id="page-content" class="p20 clearfix">
        <div class="panel panel-default">

            <div class="d-flex align-items-center justify-content-between">
                <page-heading/>
                 <create-button modalHeader='Add New Task' modalId="formModal">
                    Add New Task
                </create-button>
            </div>

            <div class="table-responsive">
                <data-table
                    :table-heading="tableHeading">

                    <template v-slot:filter>
                        <dataFilter  @click="getDataList()"></dataFilter>
                    </template>
                    <template v-slot:data>
                        <tr v-for="(taskData, taskIndex) in dataList.data" :key="taskIndex">
                            <td>{{ serialData(taskIndex) }}</td>
                            <td>{{ taskData.title }}</td>
                            <td>{{ taskData.description }}</td>                           
                            <td>{{ taskData.due_date }}</td>                           
                            <td>{{ taskData.status }}</td>                           
                            <td class="w-50">
                                <div class="gap-10 peers">
                                    <div class="peer">
                                        <edit-button @click.nat.native="editData(taskData, taskData.id)" />
                                    </div>
                                    <div class="peer">
                                        <delete-button @click.nat.native="deleteInformation(taskIndex, taskData.id)"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </template>
                    <template v-slot:pagination>
                        <div class="datatable-tools clearfix">
                            <list-count :data-list="dataList"></list-count>
                            <div class="col-md-12">
                                <pagination
                                    previousText="PREV"
                                    nextText="NEXT"
                                    :data="dataList"
                                    @paginateTo="getDataList"
                                />
                            </div>
                        </div>
                    </template>
                </data-table>
            </div>
        </div>

        <base-modal
            modal-id="formModal"
            modal-size="modal-md"
            modal-title="Add New "
            @submit="submitForm(formObject, 'formModal')">
            <div class="mb-3">
                <label class="form-label required">Title</label
                >
                <input
                    v-validate="'required'"
                    name="title"
                    type="text"
                    v-model="formObject.title"
                    class="form-control"
                />
            </div>
             <div class="mb-3">
                <label class="form-label required">Description</label
                >
                  <textarea  v-validate="'required'"
                    name="description"
                    type="text"
                    v-model="formObject.description"
                    class="form-control">
                </textarea>
            </div>
            <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" >Due Date</label>
                        <date-picker v-model="formObject.due_date" valueType="format"  name="due_date" v-validate="'required'" >
                        </date-picker>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="status" class="form-label required"> Status </label>
                        <select v-validate="'required'" name="status"  class="form-select" v-model="formObject.status" >
                            <option v-for="status in requiredData.taskStatus" :value="status" :key="status">
                                {{ status }}
                            </option>
                        </select>
                    </div>
                </div>
           
        </base-modal>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                tableHeading: {
                    sl: "Sl",
                    title: "Task Title",
                    description: "Task Description",
                    due_date: "Due Date",
                    status: "status",
                    action: "Action",
                },
                 url: null,
            };
        },
    methods: {
        resetForm() {
            const _this = this;
        }
    },
        mounted() {
            this.resetForm();
            this.getDataList();
            this.getGeneralData(["taskStatus"]);
        },
    };
</script>


