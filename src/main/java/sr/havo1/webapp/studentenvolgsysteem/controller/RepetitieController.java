package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.KlassenDOA;
import sr.havo1.webapp.studentenvolgsysteem.dao.RepetitieDOA;
import sr.havo1.webapp.studentenvolgsysteem.entity.Klassen;
import sr.havo1.webapp.studentenvolgsysteem.entity.Repetities;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;


@Path("/klassen")
public class RepetitieController {

    private RepetitieDOA repetitieDOA = new RepetitieDOA();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Repetities> findAll() {
        return repetitieDOA.loadAllRepetities();
    }

    @Path("/addRepetitie")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Repetities add(Repetities repetitie) {
        return repetitieDOA.addRepetitie(repetitie);
    }

    @Path("/updateRepetitie")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Repetities update(Repetities repetitie) {
        repetitieDOA.updateRepetitie(repetitie);
        return repetitie;
    }

    @Path("/removeRepetitie")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Repetities remove(Repetities repetitie) {
        repetitieDOA.deleteRepetitie(repetitie);
        return repetitie;
    }

    @Path("/getRepetitie")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Repetities getRepetitie(Repetities repetitie) {
        return repetitieDOA.getRepetitie(repetitie.getRepetitie_id());
    }
}
