package sr.havo1.webapp.studentenvolgsysteem.entity;

import javax.persistence.*;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/11/2018.
 */

@Entity
@Table(name = "klassen_studenten")
public class KlassenStudenten implements Serializable{

    private Long klas_student_id;
    private Klassen klas_id;
    private Studenten student_id;

    private List<Cijfers> cijfer = new ArrayList<Cijfers>();
    private List<Cijfergemiddelden> cijfergemiddelde = new ArrayList<Cijfergemiddelden>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "klas_student_id", unique = true)
    public Long getKlas_student_id() {
        return klas_student_id;
    }

    public void setKlas_student_id(Long klas_student_id) {
        this.klas_student_id = klas_student_id;
    }

    @ManyToOne
    @JoinColumn(name = "klas_id")
    public Klassen getKlas_id() {
        return klas_id;
    }

    public void setKlas_id(Klassen klas_id) {
        this.klas_id = klas_id;
    }

    @ManyToOne
    @JoinColumn(name = "student_id")
    public Studenten getStudent_id() {
        return student_id;
    }

    public void setStudent_id(Studenten student_id) {
        this.student_id = student_id;
    }

    @OneToMany(mappedBy = "klas_student_id", fetch = FetchType.LAZY)
    public List<Cijfers> getCijfer() {
        return cijfer;
    }

    public void setCijfer(List<Cijfers> cijfer) {
        this.cijfer = cijfer;
    }

    @OneToMany(mappedBy = "klas_student_id", fetch = FetchType.LAZY)
    public List<Cijfergemiddelden> getCijfergemiddelde() {
        return cijfergemiddelde;
    }

    public void setCijfergemiddelde(List<Cijfergemiddelden> cijfergemiddelde) {
        this.cijfergemiddelde = cijfergemiddelde;
    }
}
