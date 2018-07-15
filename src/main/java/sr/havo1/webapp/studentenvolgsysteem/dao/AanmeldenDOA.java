package sr.havo1.webapp.studentenvolgsysteem.dao;

import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;

public class AanmeldenDOA {

    public static final EntityManagerFactory ENTITY_MANAGER_FACTORY = Persistence.createEntityManagerFactory("studentenvolgsysteem");

}
