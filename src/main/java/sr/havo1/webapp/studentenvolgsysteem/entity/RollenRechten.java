package sr.havo1.webapp.studentenvolgsysteem.entity;

import com.fasterxml.jackson.annotation.JsonIgnore;

import javax.persistence.*;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/19/2018.
 */

@Entity
@Table(name = "rollen_rechten")
public class RollenRechten implements Serializable{

    private Long rol_recht_id;
    private Rollen rol_id;
    private Rechten recht_id;

    private List<Gebruikers> gebruikers = new ArrayList<Gebruikers>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "rol_recht_id", unique = true)
    public Long getRol_recht_id() {
        return rol_recht_id;
    }

    public void setRol_recht_id(Long rol_recht_id) {
        this.rol_recht_id = rol_recht_id;
    }

    @ManyToOne
    @JoinColumn(name = "rol_id")
    public Rollen getRol_id() {
        return rol_id;
    }

    public void setRol_id(Rollen rol_id) {
        this.rol_id = rol_id;
    }

    @ManyToOne
    @JoinColumn(name = "recht_id")
    public Rechten getRecht_id() {
        return recht_id;
    }

    public void setRecht_id(Rechten recht_id) {
        this.recht_id = recht_id;
    }

    @JsonIgnore
    @OneToMany(mappedBy = "rol_recht_id", fetch = FetchType.LAZY)
    public List<Gebruikers> getGebruikers() {
        return gebruikers;
    }

    public void setGebruikers(List<Gebruikers> gebruikers) {
        this.gebruikers = gebruikers;
    }
}
