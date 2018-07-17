package sr.havo1.webapp.studentenvolgsysteem.controller;


import sr.havo1.webapp.studentenvolgsysteem.dao.KlassenDOA;
import sr.havo1.webapp.studentenvolgsysteem.entity.Klassen;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;


@Path("/klassen")
public class KlassenController {

    private KlassenDOA klassenDOA = new KlassenDOA();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Klassen> findAll() {
        return klassenDOA.loadAllKlassen();
    }

    @Path("/addKlas")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Klassen add(Klassen klas) {
        return klassenDOA.addKlas(klas);
    }

    @Path("/updateKlas")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Klassen update(Klassen klas) {
        klassenDOA.updateKlas(klas);
        return klas;
    }

    @Path("/removeKlas")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Klassen remove(Klassen klas) {
        klassenDOA.deleteKlas(klas);
        return klas;
    }

    @Path("/getKlas")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Klassen getKlas(Klassen klas) {
        return klassenDOA.getKlas(klas.getKlas_id());
    }
}


