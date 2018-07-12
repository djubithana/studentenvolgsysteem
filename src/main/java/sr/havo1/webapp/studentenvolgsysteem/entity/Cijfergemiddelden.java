package sr.havo1.webapp.studentenvolgsysteem.entity;

import javax.persistence.*;
import java.io.Serializable;

/**
 * Created by DENCIO on 6/11/2018.
 */

@Entity
@Table(name = "cijfergemiddelden")
public class Cijfergemiddelden implements Serializable{

    private Long cijfergemiddelde_id;
    private int eerste_kwartaalcijfer;
    private int tweede_kwartaalcijfer;
    private int derde_kwartaalcijfer;
    private int eindcijfer;
    private KlassenStudenten klas_student_id;
    private Vakken vak_id;

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "cijfergemiddelde_id", unique = true)
    public Long getCijfergemiddelde_id() {
        return cijfergemiddelde_id;
    }

    public void setCijfergemiddelde_id(Long cijfergemiddelde_id) {
        this.cijfergemiddelde_id = cijfergemiddelde_id;
    }

    @Column(name = "eerste_kwartaalcijfer", nullable = false)
    public int getEerste_kwartaalcijfer() {
        return eerste_kwartaalcijfer;
    }

    public void setEerste_kwartaalcijfer(int eerste_kwartaalcijfer) {
        this.eerste_kwartaalcijfer = eerste_kwartaalcijfer;
    }

    @Column(name = "tweede_kwartaalcijfer", nullable = false)
    public int getTweede_kwartaalcijfer() {
        return tweede_kwartaalcijfer;
    }

    public void setTweede_kwartaalcijfer(int tweede_kwartaalcijfer) {
        this.tweede_kwartaalcijfer = tweede_kwartaalcijfer;
    }

    @Column(name = "derde_kwartaalcijfer", nullable = false)
    public int getDerde_kwartaalcijfer() {
        return derde_kwartaalcijfer;
    }

    public void setDerde_kwartaalcijfer(int derde_kwartaalcijfer) {
        this.derde_kwartaalcijfer = derde_kwartaalcijfer;
    }

    @Column(name = "eindcijfer", nullable = false)
    public int getEindcijfer() {
        return eindcijfer;
    }

    public void setEindcijfer(int eindcijfer) {
        this.eindcijfer = eindcijfer;
    }

    @ManyToOne
    @JoinColumn(name = "klas_student_id")
    public KlassenStudenten getKlas_student_id() {
        return klas_student_id;
    }

    public void setKlas_student_id(KlassenStudenten klas_student_id) {
        this.klas_student_id = klas_student_id;
    }

    @ManyToOne
    @JoinColumn(name = "vak_id")
    public Vakken getVak_id() {
        return vak_id;
    }

    public void setVak_id(Vakken vak_id) {
        this.vak_id = vak_id;
    }
}
