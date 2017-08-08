package com.dedykuncoro.searchview_mysql.model;

/**
 * Created by KUNCORO on 09/08/2017.
 */

public class DataModel {
    private String id, nama;

    public DataModel() {
    }

    public DataModel(String id, String nama) {
        this.id = id;
        this.nama = nama;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }
}
