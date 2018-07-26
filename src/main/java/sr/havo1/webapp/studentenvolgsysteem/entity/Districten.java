package sr.havo1.webapp.studentenvolgsysteem.entity;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "districten")
public class Districten {
    private long district_id;
    private String district_naam;

    @Id
    public long getDistrict_id() { return district_id; }

    public void setDistrict_id(long district_id) { this.district_id = district_id; }

    @Column(name = "district_naam", nullable = false)
    public String getDistrict_naam() { return district_naam; }

    public void setDistrict_naam(String district_naam) { this.district_naam = district_naam; }
}
