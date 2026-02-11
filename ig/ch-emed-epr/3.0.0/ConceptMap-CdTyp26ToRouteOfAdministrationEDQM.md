# CdTyp26 -> RouteOfAdministrationEDQM - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CdTyp26 -> RouteOfAdministrationEDQM**

## ConceptMap: CdTyp26 -> RouteOfAdministrationEDQM (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/ConceptMap/CdTyp26ToRouteOfAdministrationEDQM | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CdTyp26ToRouteOfAdministrationEDQM |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping from HCI CdTyp26 route of administration codes to RouteOfAdministrationEDQM codes. 

 
This concept map provides guidance for implementers that use HCI Index product(s) internally to translate codes for routes of administration to the eMedication service value set RouteOfAdministrationEDQM (defined as part of CH TERM). 
This concept map does not - and could not possibly - provide a one to one match for every source code. Whenever possible, comments in this concept map provide further guidance on how to approach the translation of problematic items. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "CdTyp26ToRouteOfAdministrationEDQM",
  "url" : "http://fhir.ch/ig/ch-emed-epr/ConceptMap/CdTyp26ToRouteOfAdministrationEDQM",
  "version" : "3.0.0",
  "name" : "CdTyp26ToRouteOfAdministrationEDQM",
  "title" : "CdTyp26 -> RouteOfAdministrationEDQM",
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
  "description" : "Mapping from HCI CdTyp26 route of administration codes to RouteOfAdministrationEDQM codes.",
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
  "purpose" : "This concept map provides guidance for implementers that use HCI Index product(s) internally to translate codes for routes of administration to the eMedication service value set RouteOfAdministrationEDQM (defined as part of CH TERM).\n\nThis concept map does not - and could not possibly - provide a one to one match for every source code. Whenever possible, comments in this concept map provide further guidance on how to approach the translation of problematic items.            ",
  "copyright" : "CC0-1.0",
  "sourceUri" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=26",
  "targetCanonical" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration",
  "group" : [
    {
      "source" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=26",
      "target" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
      "element" : [
        {
          "code" : "BLADINJ",
          "target" : [
            {
              "code" : "20046000",
              "display" : "Intravesical use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, an intravesical injection."
            }
          ]
        },
        {
          "code" : "BLADINSTL",
          "target" : [
            {
              "code" : "20046000",
              "display" : "Intravesical use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, an intravesical instillation."
            }
          ]
        },
        {
          "code" : "BUC",
          "target" : [
            {
              "code" : "20002500",
              "display" : "Buccal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "CHEW",
          "target" : [
            {
              "code" : "20053000",
              "display" : "Oral use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, oral use by means of chewing."
            }
          ]
        },
        {
          "code" : "DEN",
          "target" : [
            {
              "code" : "20004000",
              "display" : "Dental use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ENDOSINUS",
          "target" : [
            {
              "code" : "20007000",
              "display" : "Endosinusial use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ENDOZERV",
          "target" : [
            {
              "code" : "20006000",
              "display" : "Endocervical use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "EPI",
          "target" : [
            {
              "code" : "20009000",
              "display" : "Epidural use",
              "equivalence" : "inexact",
              "comment" : "The source code is, specifically, epidural use by means of infusion. EDQM states defines the epidural use code as \"Injection of a medicinal product into the epidural space.\"."
            }
          ]
        },
        {
          "code" : "EPIDURINJ",
          "target" : [
            {
              "code" : "20009000",
              "display" : "Epidural use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "EPILESION",
          "target" : [
            {
              "code" : "20010000",
              "display" : "Epilesional use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ET",
          "target" : [
            {
              "code" : "20008000",
              "display" : "Endotracheopulmonary use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, endotracheal use. Note that EDQM requires this to be by means of an instillation and inhalations are excluded."
            }
          ]
        },
        {
          "code" : "ETINSTL",
          "target" : [
            {
              "code" : "20008000",
              "display" : "Endotracheopulmonary use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, endotracheal use by means of an instillation."
            }
          ]
        },
        {
          "code" : "EXTAMNIOINJ",
          "target" : [
            {
              "code" : "20011000",
              "display" : "Extraamniotic use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "EXTCORP",
          "target" : [
            {
              "code" : "20011500",
              "display" : "Extracorporeal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "EXTCORPINJ",
          "target" : [
            {
              "code" : "20011500",
              "display" : "Extracorporeal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, extracorporeal use by means of an injection."
            }
          ]
        },
        {
          "code" : "EXTPLRINFUS",
          "target" : [
            {
              "code" : "20087000",
              "display" : "Extrapleural use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, extrapleural use by means of infusion."
            }
          ]
        },
        {
          "code" : "GARGLE",
          "target" : [
            {
              "code" : "20055000",
              "display" : "Oropharyngeal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, oropharyngeal use by means of gargles."
            }
          ]
        },
        {
          "code" : "GIN",
          "target" : [
            {
              "code" : "20014000",
              "display" : "Gingival use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "GINGINJ",
          "target" : [
            {
              "code" : "20014000",
              "display" : "Gingival use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, gingival use by means of injection."
            }
          ]
        },
        {
          "code" : "GT",
          "target" : [
            {
              "code" : "20013000",
              "display" : "Gastroenteral use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, gastro-intestinal use by means of instillation."
            }
          ]
        },
        {
          "code" : "HEMODIFF",
          "target" : [
            {
              "code" : "20015000",
              "display" : "Haemodialysis",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IA",
          "target" : [
            {
              "code" : "20023000",
              "display" : "Intraarterial use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intraarterial use by means of infusion."
            }
          ]
        },
        {
          "code" : "IAINJ",
          "target" : [
            {
              "code" : "20023000",
              "display" : "Intraarterial use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intraarterial use by means of injection."
            }
          ]
        },
        {
          "code" : "IAMNIOINJ",
          "target" : [
            {
              "code" : "20022000",
              "display" : "Intraamniotic use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "IARTINJ",
          "target" : [
            {
              "code" : "20024000",
              "display" : "Intraarticular use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "IBURSINJ",
          "target" : [
            {
              "code" : "20025000",
              "display" : "Intrabursal use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "ICARDINJ",
          "target" : [
            {
              "code" : "20026000",
              "display" : "Intracardiac use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "ICEREBRAL",
          "target" : [
            {
              "code" : "20027010",
              "display" : "Intracerebral use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ICERVICAL",
          "target" : [
            {
              "code" : "20028000",
              "display" : "Intracervical use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ICHOLANGIOP",
          "target" : [
            {
              "code" : "20028300",
              "display" : "Intracholangiopancreatic use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ICISTERN",
          "target" : [
            {
              "code" : "20028500",
              "display" : "Intracisternal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ICORNEAL",
          "target" : [
            {
              "code" : "20084000",
              "display" : "Intracorneal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ICORONINJ",
          "target" : [
            {
              "code" : "20029000",
              "display" : "Intracoronary use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "ICORPCAVINJ",
          "target" : [
            {
              "code" : "20027000",
              "display" : "Intracavernous use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "IDINJ",
          "target" : [
            {
              "code" : "20030000",
              "display" : "Intradermal use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "IDISCINJ",
          "target" : [
            {
              "code" : "20031000",
              "display" : "Intradiscal use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "IDUODINSTIL",
          "target" : [
            {
              "code" : "20021000",
              "display" : "Intestinal use",
              "equivalence" : "wider",
              "comment" : "The source code is, specifically, an intraduodenal instillation, while the target code is any intestinal use (duodenum, jejunum, ileum and colon)."
            }
          ]
        },
        {
          "code" : "IEPIDERMAL",
          "target" : [
            {
              "code" : "20031500",
              "display" : "Intraepidermal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IGASTINSTIL",
          "target" : [
            {
              "code" : "20013500",
              "display" : "Gastric use",
              "equivalence" : "wider",
              "comment" : "The source code is, specifically, intragastric use by means of an instillation, while the target code is any gastric use."
            }
          ]
        },
        {
          "code" : "IGLANDINJ",
          "target" : [
            {
              "code" : "20031700",
              "display" : "Intragrandular use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intragrandular use by means of an injection, while the target code is any gastric use."
            }
          ]
        },
        {
          "code" : "IKAMERAL",
          "target" : [
            {
              "code" : "20025500",
              "display" : "Intracameral use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IKARTILAG",
          "target" : [
            {
              "code" : "20026500",
              "display" : "Intracartilaginous use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ILES",
          "target" : [
            {
              "code" : "20032000",
              "display" : "Intralesional use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ILESINJ",
          "target" : [
            {
              "code" : "20032000",
              "display" : "Intralesional use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intralesional use by means of injection."
            }
          ]
        },
        {
          "code" : "ILYMPJINJ",
          "target" : [
            {
              "code" : "20033000",
              "display" : "Intralymphatic use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "IM",
          "target" : [
            {
              "code" : "20035000",
              "display" : "Intramuscular use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IMPLANTINSE",
          "target" : [
            {
              "code" : "20015500",
              "display" : "Implantation",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "INFILTINJ",
          "target" : [
            {
              "code" : "20019500",
              "display" : "Infiltration",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "IOINJ",
          "target" : [
            {
              "code" : "20036000",
              "display" : "Intraocular use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intraocular use by means of injection."
            }
          ]
        },
        {
          "code" : "IOINSTIL",
          "target" : [
            {
              "code" : "20036000",
              "display" : "Intraocular use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intraocular use by means of instillation."
            }
          ]
        },
        {
          "code" : "IONTOPHORES",
          "target" : [
            {
              "code" : "20047500",
              "display" : "Iontophoresis",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IOSSINJ",
          "target" : [
            {
              "code" : "20036500",
              "display" : "Intraosseus use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intraosseus use by means of injection."
            }
          ]
        },
        {
          "code" : "IPDP",
          "target" : [
            {
              "code" : "20038000",
              "display" : "Intraperitoneal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IPERICARDIN",
          "target" : [
            {
              "code" : "20037000",
              "display" : "Intrapericardial use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IPLRINJ",
          "target" : [
            {
              "code" : "20039000",
              "display" : "Intrapleural use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IPORTAL",
          "target" : [
            {
              "code" : "20039200",
              "display" : "Intraportal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intraportal use by means of infusion."
            }
          ]
        },
        {
          "code" : "IPORTALINJ",
          "target" : [
            {
              "code" : "20039200",
              "display" : "Intraportal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intraportal use by means of injection."
            }
          ]
        },
        {
          "code" : "IPROSTAT",
          "target" : [
            {
              "code" : "20039500",
              "display" : "Intraprostatic use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IPUTAMINAL",
          "target" : [
            {
              "code" : "20086000",
              "display" : "Intraputaminal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ISTERNALINJ",
          "target" : [
            {
              "code" : "20041000",
              "display" : "Intrasternal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IT",
          "target" : [
            {
              "code" : "20042000",
              "display" : "Intrathecal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intrathecal use by means of infusion."
            }
          ]
        },
        {
          "code" : "ITINJ",
          "target" : [
            {
              "code" : "20042000",
              "display" : "Intrathecal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intrathecal use by means of injection."
            }
          ]
        },
        {
          "code" : "ITUMINJ",
          "target" : [
            {
              "code" : "20043000",
              "display" : "Intratumoral use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IU",
          "target" : [
            {
              "code" : "20044000",
              "display" : "Intrauterine use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intrauterine use by means of insertion."
            }
          ]
        },
        {
          "code" : "IUINJ",
          "target" : [
            {
              "code" : "20044000",
              "display" : "Intrauterine use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intrauterine use by means of injection."
            }
          ]
        },
        {
          "code" : "IV",
          "target" : [
            {
              "code" : "20045000",
              "display" : "Intravenous use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intravenous use by means of infusion."
            }
          ]
        },
        {
          "code" : "IVENTCERE",
          "target" : [
            {
              "code" : "20080000",
              "display" : "Intracerebroventricular use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IVFLUSH",
          "target" : [
            {
              "equivalence" : "unmatched",
              "comment" : "No match is available. Arguably, the EDQM code 20062000 (Route of administration not applicable) could be used."
            }
          ]
        },
        {
          "code" : "IVINJ",
          "target" : [
            {
              "code" : "20045000",
              "display" : "Intravenous use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "IVITINJ",
          "target" : [
            {
              "code" : "20047000",
              "display" : "Intravitreal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, intravitreal use by means of injection."
            }
          ]
        },
        {
          "code" : "LARYNGOPHAR",
          "target" : [
            {
              "code" : "20048000",
              "display" : "Laryngopharyngeal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "NASAL",
          "target" : [
            {
              "code" : "20049000",
              "display" : "Nasal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "NASALINSTIL",
          "target" : [
            {
              "code" : "20049000",
              "display" : "Nasal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, nasal use by means of instillation."
            }
          ]
        },
        {
          "code" : "NASINHL",
          "target" : [
            {
              "code" : "20049000",
              "display" : "Nasal use",
              "equivalence" : "inexact",
              "comment" : "EDQM excludes nasal inhalation intended to target the lower respiratory tract (which should be inhalation use instead). Assuming that these are normaly oral and not nasal, it could be safe enough to use this mapping to nasal use for these cases."
            }
          ]
        },
        {
          "code" : "OPTHALTA",
          "target" : [
            {
              "code" : "20051000",
              "display" : "Ocular use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ORINHL",
          "target" : [
            {
              "code" : "20020000",
              "display" : "Inhalation use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "ORMUC",
          "target" : [
            {
              "code" : "20054000",
              "display" : "Oromucosal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ORMUCSP",
          "target" : [
            {
              "code" : "20054000",
              "display" : "Oromucosal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, oromucosal use by means of spraying a medicinal product."
            }
          ]
        },
        {
          "code" : "OROPHARTA",
          "target" : [
            {
              "code" : "20055000",
              "display" : "Oropharyngeal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, oropharyngeal use by means of spraying a medicinal product."
            }
          ]
        },
        {
          "code" : "OT",
          "target" : [
            {
              "code" : "20001000",
              "display" : "Auricular use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, auricular use by means of instillation."
            }
          ]
        },
        {
          "code" : "PAINJ",
          "target" : [
            {
              "code" : "20057000",
              "display" : "Periarticular use",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "PDONTTA",
          "target" : [
            {
              "code" : "20059000",
              "display" : "Periodontal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "PERIOSS",
          "target" : [
            {
              "code" : "20059300",
              "display" : "Periosseous use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "PNINFUS",
          "target" : [
            {
              "code" : "20058000",
              "display" : "Perineural use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, perineural use by means of infusion."
            }
          ]
        },
        {
          "code" : "PNINJ",
          "target" : [
            {
              "code" : "20058000",
              "display" : "Perineural use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, perineural use by means of injection."
            }
          ]
        },
        {
          "code" : "PO",
          "target" : [
            {
              "code" : "20053000",
              "display" : "Oral use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "POSTJUXTASC",
          "target" : [
            {
              "code" : "20059500",
              "display" : "Posterior juxtascleral use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "PTINJ",
          "target" : [
            {
              "code" : "20059400",
              "display" : "Peritumoral use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "RBINJ",
          "target" : [
            {
              "code" : "20061500",
              "display" : "Retrobulbar use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, retrobulbar use by means of injection."
            }
          ]
        },
        {
          "code" : "RECTAL",
          "target" : [
            {
              "code" : "20061000",
              "display" : "Rectal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "SCARIFICAT",
          "target" : [
            {
              "code" : "20063000",
              "display" : "Skin scarification",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "SCINJ",
          "target" : [
            {
              "code" : "20065000",
              "display" : "Subconjunctival use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "SKIN",
          "target" : [
            {
              "code" : "20003000",
              "display" : "Cutaneous use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "SL",
          "target" : [
            {
              "code" : "20067000",
              "display" : "Sublingual use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "SQ",
          "target" : [
            {
              "code" : "20066000",
              "display" : "Subcutaneous use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, a subcutaneous use by means of injection."
            }
          ]
        },
        {
          "code" : "SQIMPLNT",
          "target" : [
            {
              "code" : "20015500",
              "display" : "Implantation",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, a subcutaneous implantation."
            }
          ]
        },
        {
          "code" : "SQINFUS",
          "target" : [
            {
              "code" : "20066000",
              "display" : "Subcutaneous use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, a subcutaneous use by means of infusion."
            }
          ]
        },
        {
          "code" : "SRINJ",
          "target" : [
            {
              "code" : "20081000",
              "display" : "Subretinal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, subretinal use by means of injection."
            }
          ]
        },
        {
          "code" : "SUBMUCINJ",
          "target" : [
            {
              "code" : "20067500",
              "display" : "Submucosal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "SUCK",
          "target" : [
            {
              "code" : "20054000",
              "display" : "Oromucosal use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, oromucosal use by means of sucking a medicinal product."
            }
          ]
        },
        {
          "code" : "TRNSDERMD",
          "target" : [
            {
              "code" : "20070000",
              "display" : "Transdermal use",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "URETHINJ",
          "target" : [
            {
              "code" : "20071000",
              "display" : "Urethral use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, urethral use by means of injection."
            }
          ]
        },
        {
          "code" : "URETHINSTL",
          "target" : [
            {
              "code" : "20071000",
              "display" : "Urethral use",
              "equivalence" : "subsumes",
              "comment" : "The source code is, specifically, urethral use by means of instillation."
            }
          ]
        },
        {
          "code" : "VAGINS",
          "target" : [
            {
              "code" : "20072000",
              "display" : "Vaginal use",
              "equivalence" : "equal"
            }
          ]
        }
      ]
    }
  ]
}

```
