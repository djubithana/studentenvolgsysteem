package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.CijferDOA;
import sr.havo1.webapp.studentenvolgsysteem.dao.KlassenDOA;
import sr.havo1.webapp.studentenvolgsysteem.entity.Cijfers;
import sr.havo1.webapp.studentenvolgsysteem.entity.Klassen;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;


@Path("/cijfers")
public class CijferController {

    private CijferDOA cijferDOA = new CijferDOA();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Cijfers> findAll() {
        return cijferDOA.loadAllKlassen();
    }

    @Path("/addCijfer")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Cijfers add(Cijfers cijfer) {
        return cijferDOA.addCijfer(cijfer);
    }

    @Path("/updateCijfer")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Cijfers update(Cijfers cijfer) {
        cijferDOA.updateCijfer(cijfer);
        return cijfer;
    }

    @Path("/removeCijfer")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Cijfers remove(Cijfers cijfer) {
        cijferDOA.deleteCijfer(cijfer);
        return cijfer;
    }

    @Path("/getCijfer")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Cijfers getCijfer(Cijfers cijfer) {
        return cijferDOA.getCijfer(cijfer.getCijfer_id());
    }
}

