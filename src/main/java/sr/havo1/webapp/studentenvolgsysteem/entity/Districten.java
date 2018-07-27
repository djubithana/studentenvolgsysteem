package sr.havo1.webapp.studentenvolgsysteem.entity;

import com.fasterxml.jackson.annotation.JsonIgnore;

import javax.persistence.*;
import java.util.ArrayList;
import java.util.List;

@Entity
@Table(name = "districten")
public class Districten {
    private long district_id;
    private String district_naam;

    private List<Studenten> student = new ArrayList<Studenten>();
    private List<Studenten> verzorger = new ArrayList<Studenten>();



    @Id
    public long getDistrict_id() { return district_id; }

    public void setDistrict_id(long district_id) { this.district_id = district_id; }

    @Column(name = "district_naam", nullable = false)
    public String getDistrict_naam() { return district_naam; }

    public void setDistrict_naam(String district_naam) { this.district_naam = district_naam; }

    @JsonIgnore
    @OneToMany(mappedBy = "district_id", fetch = FetchType.LAZY)
    public List<Studenten> getStudent() { return student; }
    public void setStudent(List<Studenten> student) { this.student = student; }

    @JsonIgnore
    @OneToMany(mappedBy = "verzorger_district_id",fetch = FetchType.LAZY)
    public List<Studenten> getVerzorger() { return verzorger; }
    public void setVerzorger(List<Studenten> verzorger) { this.verzorger = verzorger; }
}
