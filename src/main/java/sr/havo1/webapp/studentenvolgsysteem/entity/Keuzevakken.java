package sr.havo1.webapp.studentenvolgsysteem.entity;

import javax.persistence.*;
import java.io.Serializable;
import java.time.Year;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/26/2018.
 */

@Entity
@Table(name = "keuzevakken")
public class Keuzevakken implements Serializable{

    private int keuzevak_id;
    private int schooljaar;
    private Vakken vak_id;
    private Studenten student_id;

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "keuzevak_id", unique = true)
    public int getKeuzevak_id() {
        return keuzevak_id;
    }

    public void setKeuzevak_id(int keuzevak_id) {
        this.keuzevak_id = keuzevak_id;
    }

    @Column(name = "schooljaar", nullable = false)
    public int getSchooljaar() {
        return schooljaar;
    }

    public void setSchooljaar(int schooljaar) {
        this.schooljaar = schooljaar;
    }

    @ManyToOne
    @JoinColumn(name = "vak_id")
    public Vakken getVak_id() {
        return vak_id;
    }

    public void setVak_id(Vakken vak_id) {
        this.vak_id = vak_id;
    }

    @ManyToOne
    @JoinColumn(name = "student_id")
    public Studenten getStudent_id() {
        return student_id;
    }

    public void setStudent_id(Studenten student_id) {
        this.student_id = student_id;
    }
}
