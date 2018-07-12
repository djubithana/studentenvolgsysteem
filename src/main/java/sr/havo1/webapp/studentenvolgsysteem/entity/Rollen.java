package sr.havo1.webapp.studentenvolgsysteem.entity;

import com.fasterxml.jackson.annotation.JsonIgnore;

import javax.persistence.*;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/11/2018.
 */

@Entity
@Table(name = "rollen")
public class Rollen implements Serializable{

    private Long rol_id;
    private String rolnaam;

    private List<RollenRechten> rolRecht = new ArrayList<RollenRechten>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "rol_id", unique = true)
    public Long getRol_id() {
        return rol_id;
    }

    public void setRol_id(Long rol_id) {
        this.rol_id = rol_id;
    }

    @Column(name = "rolnaam", nullable = false)
    public String getRolnaam() {
        return rolnaam;
    }

    public void setRolnaam(String rolnaam) {
        this.rolnaam = rolnaam;
    }

    @JsonIgnore
    @OneToMany(mappedBy = "rol_id", fetch = FetchType.LAZY)
    public List<RollenRechten> getRolRecht() {
        return rolRecht;
    }

    public void setRolRecht(List<RollenRechten> rolRecht) {
        this.rolRecht = rolRecht;
    }
}
