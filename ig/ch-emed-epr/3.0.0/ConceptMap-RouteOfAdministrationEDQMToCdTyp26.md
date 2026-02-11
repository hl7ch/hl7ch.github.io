# RouteOfAdministrationEDQM -> CdTyp26 - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RouteOfAdministrationEDQM -> CdTyp26**

## ConceptMap: RouteOfAdministrationEDQM -> CdTyp26 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/ConceptMap/RouteOfAdministrationEDQMToCdTyp26 | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:RouteOfAdministrationEDQMToCdTyp26 |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping from RouteOfAdministrationEDQM route of administration codes to HCI CdTyp26 codes. 

 
This concept map provides guidance for implementers that use HCI Index product(s) internally to translate EDQM codes for routes of administration as used by the eMedication service to the HCI CdTyp26 equivalent. 
This concept map does not - and could not possibly - provide a one to one match for every source code. Whenever possible, comments in this concept map provide further guidance on how to approach the translation of problematic items. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "RouteOfAdministrationEDQMToCdTyp26",
  "url" : "http://fhir.ch/ig/ch-emed-epr/ConceptMap/RouteOfAdministrationEDQMToCdTyp26",
  "version" : "3.0.0",
  "name" : "RouteOfAdministrationEDQMToCdTyp26",
  "title" : "RouteOfAdministrationEDQM -> CdTyp26",
  "status" : "draft",
  "experimental" : true,
  "date" : "2026-02-11T07:01:54+00:00",
  "publisher" : "CARA",
  "contact" : [
    {
      "name" : "CARA",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.cara.ch"
        }
      ]
    }
  ],
  "description" : "Mapping from RouteOfAdministrationEDQM route of administration codes to HCI CdTyp26 codes.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }
      ]
    }
  ],
  "purpose" : "This concept map provides guidance for implementers that use HCI Index product(s) internally to translate EDQM codes for routes of administration as used by the eMedication service to the HCI CdTyp26 equivalent.\n\nThis concept map does not - and could not possibly - provide a one to one match for every source code. Whenever possible, comments in this concept map provide further guidance on how to approach the translation of problematic items.            ",
  "copyright" : "CC0-1.0",
  "sourceUri" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration",
  "targetCanonical" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=26",
  "group" : [
    {
      "source" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
      "target" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=26",
      "element" : [
        {
          "code" : "20001000",
          "target" : [
            {
              "code" : "OT",
              "display" : "Auricular (instillation)",
              "equivalence" : "specializes",
              "comment" : "The source code is any auricular use, while the target code is specifically auricular use by means of instillation. There is no other auricular use code in CdTyp26."
            }
          ]
        },
        {
          "code" : "20002500",
          "target" : [
            {
              "code" : "BUC",
              "display" : "Buccal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20003000",
          "target" : [
            {
              "code" : "SKIN",
              "display" : "Topical",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20004000",
          "target" : [
            {
              "code" : "DEN",
              "display" : "Dental",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20006000",
          "target" : [
            {
              "code" : "ENDOZERV",
              "display" : "Endocervical",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20007000",
          "target" : [
            {
              "code" : "ENDOSINUS",
              "display" : "Endosinusial",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20008000",
          "target" : [
            {
              "code" : "ET",
              "display" : "Endotracheal",
              "equivalence" : "equivalent",
              "comment" : "The source code is defined as endotracheopulmanory use, while the target code is endotracheal use."
            }
          ]
        },
        {
          "code" : "20009000",
          "target" : [
            {
              "code" : "EPI",
              "display" : "Epidural (infusion)",
              "equivalence" : "specializes",
              "comment" : "The source code is any epidural use, while the target code is specifically epidural use by means of infusion."
            }
          ]
        },
        {
          "code" : "20009000",
          "target" : [
            {
              "code" : "EPIDURINJ",
              "display" : "Epidural (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any epidural use, while the target code is specifically epidural use by means of injection."
            }
          ]
        },
        {
          "code" : "20010000",
          "target" : [
            {
              "code" : "EPILESION",
              "display" : "Epilesional",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20011000",
          "target" : [
            {
              "code" : "EXTAMNIOINJ",
              "display" : "Extraamniotic",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20011500",
          "target" : [
            {
              "code" : "EXTCORP",
              "display" : "Extracorporeal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20087000",
          "target" : [
            {
              "code" : "EXTPLRINFUS",
              "display" : "Extrapleural (instillation)",
              "equivalence" : "specializes",
              "comment" : "The source code is any injection of a medicinal product directly outside the pleural cavity, while the target code is specifically extrapleural use by means of an instillation. There is no other extrapleural use code in CdTyp26."
            }
          ]
        },
        {
          "code" : "20013000",
          "target" : [
            {
              "code" : "GT",
              "display" : "Gastrointestinal (instillation)",
              "equivalence" : "specializes",
              "comment" : "The source code is any gastroenteral use, while the target code is specifically gastrointestinal use by means of instillation. There is no other gastroenteral use code in CdTyp26."
            }
          ]
        },
        {
          "code" : "20013500",
          "target" : [
            {
              "code" : "IGASTINSTIL",
              "display" : "Intragastric (instillation)",
              "equivalence" : "specializes",
              "comment" : "The source code is any gastric use, while the target code is specifically intragastric use by means of instillation. There is no other gastric use code in CdTyp26."
            }
          ]
        },
        {
          "code" : "20014000",
          "target" : [
            {
              "code" : "GI",
              "display" : "Gingival",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20015000",
          "target" : [
            {
              "code" : "HEMODIFF",
              "display" : "Haemodialysis (diffusion)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20015500",
          "target" : [
            {
              "code" : "IMPLANTINSE",
              "display" : "Implantation (insertion)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20019500",
          "target" : [
            {
              "code" : "INFILTINJ",
              "display" : "Infiltration (injection)",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20020000",
          "target" : [
            {
              "code" : "ORINHL",
              "display" : "Oral (inhalation)",
              "equivalence" : "equivalent",
              "comment" : "EDQM excludes nasal use from the inhalation use code."
            }
          ]
        },
        {
          "code" : "20021000",
          "target" : [
            {
              "code" : "GT",
              "display" : "Gastrointestinal (instillation)",
              "equivalence" : "inexact",
              "comment" : "The source code is any intestinal use, while the target code is any gastrointestinal use by means of instillation. There is no other intestinal use code in CdTyp26."
            }
          ]
        },
        {
          "code" : "20022000",
          "target" : [
            {
              "code" : "IAMNIOINJ",
              "display" : "Intraamniotic (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20023000",
          "target" : [
            {
              "code" : "IA",
              "display" : "Intraarterial (infusion)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intraarterial use, while the target code is specifically intraarterial use by means of infusion."
            }
          ]
        },
        {
          "code" : "20023000",
          "target" : [
            {
              "code" : "IAINJ",
              "display" : "Intraarterial (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intraarterial use, while the target code is specifically auricular use by means of injection."
            }
          ]
        },
        {
          "code" : "20024000",
          "target" : [
            {
              "code" : "IARTINJ",
              "display" : "Intraarticular",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20025000",
          "target" : [
            {
              "code" : "IBURSINJ",
              "display" : "Intrabursal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20025500",
          "target" : [
            {
              "code" : "IKAMERAL",
              "display" : "Intracameral",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20026000",
          "target" : [
            {
              "code" : "ICARDINJ",
              "display" : "Intracardiac (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20026500",
          "target" : [
            {
              "code" : "IKARTILAG",
              "display" : "Intracartilaginous",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20027000",
          "target" : [
            {
              "code" : "ICORPCAVINJ",
              "display" : "Intracavernous",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20027010",
          "target" : [
            {
              "code" : "ICEREBRAL",
              "display" : "Intracerebral",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20028000",
          "target" : [
            {
              "code" : "ICERVICAL",
              "display" : "Intracervical (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20028300",
          "target" : [
            {
              "code" : "ICHOLANGIOP",
              "display" : "Intracholangiopancreatic (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20028500",
          "target" : [
            {
              "code" : "ICISTERN",
              "display" : "Intracisternal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20029000",
          "target" : [
            {
              "code" : "ICORONINJ",
              "display" : "Intracoronary (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20030000",
          "target" : [
            {
              "code" : "IDINJ",
              "display" : "Intradermal (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20031000",
          "target" : [
            {
              "code" : "IDISCINJ",
              "display" : "Intradiscal (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20031500",
          "target" : [
            {
              "code" : "IEPIDERMAL",
              "display" : "Intraepidermal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20031700",
          "target" : [
            {
              "code" : "IGLANDINJ",
              "display" : "Intraglandular (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20032000",
          "target" : [
            {
              "code" : "ILES",
              "display" : "Intralesional",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20033000",
          "target" : [
            {
              "code" : "ILYMPJINJ",
              "display" : "Intralymphatic",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20035000",
          "target" : [
            {
              "code" : "IM",
              "display" : "Intramuscular (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20036000",
          "target" : [
            {
              "code" : "IOINJ",
              "display" : "Intraocular (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intraocular use, while the target code is specifically intraocular use by means of injection."
            }
          ]
        },
        {
          "code" : "20036000",
          "target" : [
            {
              "code" : "IOINSTIL",
              "display" : "Intraocular (instillation)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intraocular use, while the target code is specifically intraocular use by means of instillation."
            }
          ]
        },
        {
          "code" : "20036500",
          "target" : [
            {
              "code" : "IOSSINJ",
              "display" : "Intraosseous (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20037000",
          "target" : [
            {
              "code" : "IPERICARDIN",
              "display" : "Intrapericardial (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20038000",
          "target" : [
            {
              "code" : "IPDP",
              "display" : "Intraperitoneal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20039000",
          "target" : [
            {
              "code" : "IPLRINJ",
              "display" : "Intrapleural",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20039200",
          "target" : [
            {
              "code" : "IPORTAL",
              "display" : "Intraportal (infusion)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intraportal use, while the target code is specifically intraportal use by means of infusion."
            }
          ]
        },
        {
          "code" : "20039200",
          "target" : [
            {
              "code" : "IPORTALINJ",
              "display" : "Intraportal (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intraportal use, while the target code is specifically intraportal use by means of injection."
            }
          ]
        },
        {
          "code" : "20039500",
          "target" : [
            {
              "code" : "IPROSTAT",
              "display" : "Intraprostatic",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20041000",
          "target" : [
            {
              "code" : "ISTERNALINJ",
              "display" : "Intrasternal (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20042000",
          "target" : [
            {
              "code" : "IT",
              "display" : "Intrathecal (infusion)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intrathecal use, while the target code is specifically intrathecal use by means of infusion."
            }
          ]
        },
        {
          "code" : "20042000",
          "target" : [
            {
              "code" : "ITINJ",
              "display" : "Intrathecal (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intrathecal use, while the target code is specifically intrathecal use by means of injection."
            }
          ]
        },
        {
          "code" : "20043000",
          "target" : [
            {
              "code" : "ITUMINJ",
              "display" : "Intratumoral",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20044000",
          "target" : [
            {
              "code" : "IU",
              "display" : "Intrauterine (insertion)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intrauterine use, while the target code is specifically intrauterine use by means of insertion. Arguably, an insertion in EDQM would be an \"Implantation\" use, instead of an intrauterine use, so the this mapping element could be ignored."
            }
          ]
        },
        {
          "code" : "20044000",
          "target" : [
            {
              "code" : "IUINJ",
              "display" : "Intrauterine (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intrauterine use, while the target code is specifically intrauterine use by means of injection."
            }
          ]
        },
        {
          "code" : "20045000",
          "target" : [
            {
              "code" : "IV",
              "display" : "Intravenous (infusion)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intravenous use, while the target code is specifically intravenous use by means of infusion."
            }
          ]
        },
        {
          "code" : "20045000",
          "target" : [
            {
              "code" : "IVINJ",
              "display" : "Intravenous (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intravenous use, while the target code is specifically intravenous use by means of injection."
            }
          ]
        },
        {
          "code" : "20046000",
          "target" : [
            {
              "code" : "BLADINJ",
              "display" : "Intravesical (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intravesical use, while the target code is specifically intravesical use by means of injection."
            }
          ]
        },
        {
          "code" : "20046000",
          "target" : [
            {
              "code" : "BLADINSTL",
              "display" : "Intravesical (instillation)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intravesical use, while the target code is specifically intravesical use by means of instillation."
            }
          ]
        },
        {
          "code" : "20047000",
          "target" : [
            {
              "code" : "IVITINJ",
              "display" : "Intravitreal (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any intravitreal use, while the target code is specifically intravitreal use by means of injection. There is no other intravitreal use code in CdTyp26."
            }
          ]
        },
        {
          "code" : "20047500",
          "target" : [
            {
              "code" : "IONTOPHORES",
              "display" : "Iontophoresis",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20048000",
          "target" : [
            {
              "code" : "LARYNGOPHAR",
              "display" : "Laryngopharingeal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20049000",
          "target" : [
            {
              "code" : "NASAL",
              "display" : "Nasal",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20051000",
          "target" : [
            {
              "code" : "OPTHALTA",
              "display" : "Ophthalmic",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20053000",
          "target" : [
            {
              "code" : "PO",
              "display" : "Peroral (swallow)",
              "equivalence" : "equivalent",
              "comment" : "Note that, while EDQM has only a oral code for swallowing a medication, CdTyp26 has more granularity and allows to specify oral uses via chewing or sucking, which ultimatiately would be swallowed."
            }
          ]
        },
        {
          "code" : "20054000",
          "target" : [
            {
              "code" : "ORMUC",
              "display" : "Oromucosal",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20055000",
          "target" : [
            {
              "code" : "GARGLE",
              "display" : "Oropharyngeal (gargle)",
              "equivalence" : "specializes",
              "comment" : "The source code is any oropharyngeal use, while the target code is specifically oropharyngeal use by means of gargling."
            }
          ]
        },
        {
          "code" : "20055000",
          "target" : [
            {
              "code" : "OROPHARTA",
              "display" : "Oropharyngeal (spray)",
              "equivalence" : "specializes",
              "comment" : "The source code is any oropharyngeal use, while the target code is specifically oropharyngeal use by means of spraying a medicinal product."
            }
          ]
        },
        {
          "code" : "20057000",
          "target" : [
            {
              "code" : "PAINJ",
              "display" : "Periarticular",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20058000",
          "target" : [
            {
              "code" : "PNINFUS",
              "display" : "Perineural (infusion)",
              "equivalence" : "specializes",
              "comment" : "The source code is any perineural use, while the target code is specifically perineural use by means of infusion."
            }
          ]
        },
        {
          "code" : "20058000",
          "target" : [
            {
              "code" : "PNINJ",
              "display" : "Perineural (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any perineural use, while the target code is specifically perineural use by means of injection."
            }
          ]
        },
        {
          "code" : "20059000",
          "target" : [
            {
              "code" : "PDONTTA",
              "display" : "Periodontal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20059300",
          "target" : [
            {
              "code" : "PERIOSS",
              "display" : "Periosseous",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20059400",
          "target" : [
            {
              "code" : "PTINJ",
              "display" : "Peritumoral",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20059500",
          "target" : [
            {
              "code" : "POSTJUXTASC",
              "display" : "Posterior juxtascleral",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20061000",
          "target" : [
            {
              "code" : "RECTAL",
              "display" : "Rectal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20061500",
          "target" : [
            {
              "code" : "RBINJ",
              "display" : "Retrobulbar (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any retrobulbar use, while the target code is specifically retrobulbar use by means of instillation. There is no other retrobulbar use code in CdTyp26."
            }
          ]
        },
        {
          "code" : "20062000",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "20063000",
          "target" : [
            {
              "code" : "SCARIFICAT",
              "display" : "Scarification",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20065000",
          "target" : [
            {
              "code" : "SCINJ",
              "display" : "Subconjunctival (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20066000",
          "target" : [
            {
              "code" : "SQ",
              "display" : "Subcutaneous (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any subcuteaneous use, understood as the injection of a medicinal product directly underneath the skin, while the target code is specifically subcutaneous use by means of injection."
            }
          ]
        },
        {
          "code" : "20066000",
          "target" : [
            {
              "code" : "SQIMPLNT",
              "display" : "Subcutaneous (implantation)",
              "equivalence" : "inexact",
              "comment" : "While the source code is any subcuteaneous use, understood as the injection of a medicinal product directly underneath the skin, EDQM has a different code for Implantation as a route of administration."
            }
          ]
        },
        {
          "code" : "20066000",
          "target" : [
            {
              "code" : "SQINFUS",
              "display" : "Subcutaneous (infusion)",
              "equivalence" : "specializes",
              "comment" : "The source code is any subcutaneous use, while the target code is specifically subcutaneous use by means of infusion. EDQM routes of administration do not make a difference between injection and infusion."
            }
          ]
        },
        {
          "code" : "20067000",
          "target" : [
            {
              "code" : "SL",
              "display" : "Sublingual",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20067500",
          "target" : [
            {
              "code" : "SUBMUCINJ",
              "display" : "Submucosal (injection)",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "20070000",
          "target" : [
            {
              "code" : "TRNSDERMD",
              "display" : "Transdermal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20071000",
          "target" : [
            {
              "code" : "URETHINJ",
              "display" : "Urethral (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any urethral use, while the target code is specifically urethral use by means of injection."
            }
          ]
        },
        {
          "code" : "20071000",
          "target" : [
            {
              "code" : "URETHINSTL",
              "display" : "Urethral (instillation)",
              "equivalence" : "specializes",
              "comment" : "The source code is any urethral use, while the target code is specifically urethral use by means of instillation."
            }
          ]
        },
        {
          "code" : "20072000",
          "target" : [
            {
              "code" : "VAGINS",
              "display" : "Vaginal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20080000",
          "target" : [
            {
              "code" : "IVENTCERE",
              "display" : "Cerebral intraverticular",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20081000",
          "target" : [
            {
              "code" : "SRINJ",
              "display" : "Subretinal (injection)",
              "equivalence" : "specializes",
              "comment" : "The source code is any subretinal use, while the target code is specifically subretinal use by means of injection. There is no other subretinal use code in CdTyp26."
            }
          ]
        },
        {
          "code" : "20084000",
          "target" : [
            {
              "code" : "ICORNEAL",
              "display" : "Intracorneal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "20086000",
          "target" : [
            {
              "code" : "IPUTAMINAL",
              "display" : "Intraputaminal",
              "equivalence" : "equal"
            }
          ]
        }
      ]
    }
  ]
}

```
