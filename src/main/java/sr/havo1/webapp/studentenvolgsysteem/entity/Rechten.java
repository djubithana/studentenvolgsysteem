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
@Table(name = "rechten")
public class Rechten implements Serializable{

    private Long recht_id;
    private String rechtnaam;

    private List<RollenRechten> rolRecht = new ArrayList<RollenRechten>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "recht_id", unique = true)
    public Long getRecht_id() {
        return recht_id;
    }

    public void setRecht_id(Long recht_id) {
        this.recht_id = recht_id;
    }

    @Column(name = "rechtnaam", nullable = false)
    public String getRechtnaam() {
        return rechtnaam;
    }

    public void setRechtnaam(String rechtnaam) {
        this.rechtnaam = rechtnaam;
    }

    @JsonIgnore
    @OneToMany(mappedBy = "recht_id", fetch = FetchType.LAZY)
    public List<RollenRechten> getRolRecht() {
        return rolRecht;
    }

    public void setRolRecht(List<RollenRechten> rolRecht) {
        this.rolRecht = rolRecht;
    }
}
