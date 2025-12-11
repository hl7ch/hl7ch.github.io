# KEYTRUDA Inf Konz 100 mg / 4 ml (Bundle) - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **KEYTRUDA Inf Konz 100 mg / 4 ml (Bundle)**

## Example Bundle: KEYTRUDA Inf Konz 100 mg / 4 ml (Bundle)



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "b2eb19be-cca4-4fd8-a2a3-84d05631e6c0",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-bundle"
    ]
  },
  "type" : "collection",
  "entry" : [
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPMedicinalProductDefinition/Keytruda-100mg-Vial",
      "resource" : {
        "resourceType" : "MedicinalProductDefinition",
        "id" : "Keytruda-100mg-Vial",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-medicinalproductdefinition"
          ]
        },
        "text" : {
          "status" : "extensions",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"MedicinalProductDefinition_Keytruda-100mg-Vial\"> </a><p class=\"res-header-id\"><b>Generated Narrative: MedicinalProductDefinition Keytruda-100mg-Vial</b></p><a name=\"Keytruda-100mg-Vial\"> </a><a name=\"hcKeytruda-100mg-Vial\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-medicinalproductdefinition.html\">IDMP MedicinalProductDefinition</a></p></div><p><b>CH - SMC Authorized Dose Form</b>: <span title=\"Codes:{http://standardterms.edqm.eu 11213000}\">Concentrate for solution for infusion</span></p><p><b>CH - EPL Full Limitation Text</b>: Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17</p><p><b>identifier</b>: <a href=\"NamingSystem-MPID.html\" title=\"Temporary Identifier in this implementation guide until officially released by Swissmedic\">Medical Product Identifier</a>/CH-7601001001138-6623101</p><p><b>indication</b>: </p><div><p>Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern &gt;3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie.</p>\n</div><p><b>legalStatusOfSupply</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-legal-status-of-supply 756005022001}\">Medicinal product subject to medical or veterinary prescription single dispensation (A)</span></p><p><b>additionalMonitoringIndicator</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-additional-monitoring-indicator 756005001003}\">No Warning</span></p><p><b>pediatricUseIndicator</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-pediatric-use-indicator 756005003001}\">Authorised for the treatment in children</span></p><p><b>classification</b>: <span title=\"Codes:{http://www.whocc.no/atc G03FA01}\">norethisterone and estrogen</span>, <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-authorisation-category 756005021001}\">NA KAS art. 12 para. 5 TPLO</span>, <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-therapeuticproductcode 756005004003}\">Biologics</span>, <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-product-type 756001003002}\">Originator product</span>, <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus 070000}, {http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus 071600}, {http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus 071610}\">07. STOFFWECHSEL</span></p><p><b>attachedDocument</b>: <a href=\"DocumentReference-DocRef-FI-Keytruda.html\">DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-klm-123; status = current; type = Fachinformation; date = 2024-09-01 00:00:00+0000</a></p><blockquote><p><b>name</b></p><p><b>productName</b>: KEYTRUDA Inf Konz 100 mg/4ml</p><p><b>type</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-medicinal-product-name-type SMC}\">Zugelassener Arzneimittelname</span></p><h3>Usages</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Country</b></td><td><b>Language</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{urn:iso:std:iso:3166 CH}\">Switzerland</span></td><td><span title=\"Codes:{urn:ietf:bcp:47 de-CH}\">German (Switzerland)</span></td></tr></table></blockquote></div>"
        },
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/authorizedDoseForm",
            "valueCodeableConcept" : {
              "coding" : [
                {
                  "system" : "http://standardterms.edqm.eu",
                  "code" : "11213000",
                  "display" : "Concentrate for solution for infusion"
                }
              ]
            }
          },
          {
            "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/fullLimitationText",
            "valueString" : "Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17"
          }
        ],
        "identifier" : [
          {
            "system" : "http://fhir.ch/ig/ch-epl/sid/mpid",
            "value" : "CH-7601001001138-6623101"
          }
        ],
        "indication" : "Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern >3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie. \n",
        "legalStatusOfSupply" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-legal-status-of-supply",
              "code" : "756005022001",
              "display" : "Medicinal product subject to medical or veterinary prescription single dispensation (A)"
            }
          ]
        },
        "additionalMonitoringIndicator" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-additional-monitoring-indicator",
              "code" : "756005001003",
              "display" : "No Warning"
            }
          ]
        },
        "pediatricUseIndicator" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-pediatric-use-indicator",
              "code" : "756005003001",
              "display" : "Authorised for the treatment in children"
            }
          ]
        },
        "classification" : [
          {
            "coding" : [
              {
                "system" : "http://www.whocc.no/atc",
                "code" : "G03FA01"
              }
            ]
          },
          {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-authorisation-category",
                "code" : "756005021001",
                "display" : "NA KAS art. 12 para. 5 TPLO"
              }
            ]
          },
          {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-therapeuticproductcode",
                "code" : "756005004003",
                "display" : "Biologics"
              }
            ]
          },
          {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-product-type",
                "code" : "756001003002",
                "display" : "Originator product"
              }
            ]
          },
          {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus",
                "code" : "070000",
                "display" : "07. STOFFWECHSEL"
              },
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus",
                "code" : "071600",
                "display" : "07.16. Oncologica"
              },
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus",
                "code" : "071610",
                "display" : "07.16.10. Cytostatica"
              }
            ]
          }
        ],
        "attachedDocument" : [
          {
            "reference" : "DocumentReference/DocRef-FI-Keytruda"
          }
        ],
        "name" : [
          {
            "productName" : "KEYTRUDA Inf Konz 100 mg/4ml",
            "type" : {
              "coding" : [
                {
                  "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-medicinal-product-name-type",
                  "code" : "SMC",
                  "display" : "Zugelassener Arzneimittelname"
                }
              ]
            },
            "usage" : [
              {
                "country" : {
                  "coding" : [
                    {
                      "system" : "urn:iso:std:iso:3166",
                      "code" : "CH",
                      "display" : "Switzerland"
                    }
                  ]
                },
                "language" : {
                  "coding" : [
                    {
                      "system" : "urn:ietf:bcp:47",
                      "code" : "de-CH",
                      "display" : "German (Switzerland)"
                    }
                  ]
                }
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPDocumentReference/DocRef-FI-Keytruda",
      "resource" : {
        "resourceType" : "DocumentReference",
        "id" : "DocRef-FI-Keytruda",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-documentreference"
          ]
        },
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"DocumentReference_DocRef-FI-Keytruda\"> </a><p class=\"res-header-id\"><b>Generated Narrative: DocumentReference DocRef-FI-Keytruda</b></p><a name=\"DocRef-FI-Keytruda\"> </a><a name=\"hcDocRef-FI-Keytruda\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-documentreference.html\">CH IDMP DocumentReference</a></p></div><p><b>identifier</b>: <a href=\"NamingSystem-AttNo.html\" title=\"Temporary Namingsystem in this implementation guide until officially released by Swissmedic\">Application / Assessment Tracking Number</a>/123456789-initial submission-Example-klm-123</p><p><b>status</b>: Current</p><p><b>type</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-attached-document-type 756005007001}\">Fachinformation</span></p><p><b>date</b>: 2024-09-01 00:00:00+0000</p><blockquote><p><b>content</b></p><h3>Attachments</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Url</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"https://swissmedicinfo.ch/showTextAccepted.aspx?textType=FI&amp;lang=DE&amp;authNr=66231&amp;supportMultipleResults=1\">https://swissmedicinfo.ch/showTextAccepted.aspx?textType=FI&amp;lang=DE&amp;authNr=66231&amp;supportMultipleResults=1</a></td></tr></table></blockquote></div>"
        },
        "identifier" : [
          {
            "system" : "http://fhir.ch/ig/ch-epl/sid/attno",
            "value" : "123456789-initial submission-Example-klm-123"
          }
        ],
        "status" : "current",
        "type" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-attached-document-type",
              "code" : "756005007001",
              "display" : "Fachinformation"
            }
          ]
        },
        "date" : "2024-09-01T00:00:00Z",
        "content" : [
          {
            "attachment" : {
              "url" : "https://swissmedicinfo.ch/showTextAccepted.aspx?textType=FI&lang=DE&authNr=66231&supportMultipleResults=1"
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPRegulatedAuthorisation/MA-6623101",
      "resource" : {
        "resourceType" : "RegulatedAuthorization",
        "id" : "MA-6623101",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"RegulatedAuthorization_MA-6623101\"> </a><p class=\"res-header-id\"><b>Generated Narrative: RegulatedAuthorization MA-6623101</b></p><a name=\"MA-6623101\"> </a><a name=\"hcMA-6623101\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-regulatedauthorization.html\">IDMP RegulatedAuthorization</a></p></div><p><b>identifier</b>: <a href=\"NamingSystem-AuthNo.html\" title=\"Temporary Identifier in this implementation guide until officially released by Swissmedic\">Marketing Authorisation Number</a>/6623101</p><p><b>subject</b>: <a href=\"MedicinalProductDefinition-Keytruda-100mg-Vial.html\">MedicinalProductDefinition: extension = Concentrate for solution for infusion,Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001001138-6623101; indication = Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern &gt;3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie. \n; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Biologics,Originator product,07. STOFFWECHSEL</a></p><p><b>type</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type 756000002001}\">Marketing Authorisation</span></p><p><b>region</b>: <span title=\"Codes:{urn:iso:std:iso:3166 CH}\">Switzerland</span></p><p><b>status</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-authorisation-status 756005023007}\">valid</span></p><p><b>statusDate</b>: 2022-02-17</p><p><b>holder</b>: <a href=\"#hcMA-6623101/holder-MSD-Merck-Sharp-Dohme-AG\">Organization MSD Merck Sharp &amp; Dohme AG</a></p><p><b>regulator</b>: <a href=\"#hcMA-6623101/regulator-SMC\">Organization SMC</a></p><hr/><blockquote><p class=\"res-header-id\"><b>Generated Narrative: Organization #holder-MSD-Merck-Sharp-Dohme-AG</b></p><a name=\"MA-6623101/holder-MSD-Merck-Sharp-Dohme-AG\"> </a><a name=\"hcMA-6623101/holder-MSD-Merck-Sharp-Dohme-AG\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-epl-organization.html\">CH EPL Organization</a></p></div><p><b>identifier</b>: <a href=\"NamingSystem-LOC.html\" title=\"Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS)\">LOC Identifier</a>/100080484, <a href=\"NamingSystem-GLN.html\" title=\"Identifier holding a number for GLN (Global Location Number)\">GLN Identifier</a>/7601001001138</p><p><b>name</b>: MSD Merck Sharp &amp; Dohme AG</p></blockquote><hr/><blockquote><p class=\"res-header-id\"><b>Generated Narrative: Organization #regulator-SMC</b></p><a name=\"MA-6623101/regulator-SMC\"> </a><a name=\"hcMA-6623101/regulator-SMC\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-epl-organization.html\">CH EPL Organization</a></p></div><p><b>identifier</b>: <a href=\"NamingSystem-LOC.html\" title=\"Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS)\">LOC Identifier</a>/100010911, <a href=\"NamingSystem-GLN.html\" title=\"Identifier holding a number for GLN (Global Location Number)\">GLN Identifier</a>/7601001398511</p><p><b>name</b>: SMC</p></blockquote></div>"
        },
        "contained" : [
          {
            "resourceType" : "Organization",
            "id" : "holder-MSD-Merck-Sharp-Dohme-AG",
            "meta" : {
              "profile" : [
                "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
              ]
            },
            "identifier" : [
              {
                "system" : "urn:oid:1.2.276.0.76",
                "value" : "100080484"
              },
              {
                "system" : "urn:oid:2.51.1.3",
                "value" : "7601001001138"
              }
            ],
            "name" : "MSD Merck Sharp & Dohme AG"
          },
          {
            "resourceType" : "Organization",
            "id" : "regulator-SMC",
            "meta" : {
              "profile" : [
                "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
              ]
            },
            "identifier" : [
              {
                "system" : "urn:oid:1.2.276.0.76",
                "value" : "100010911"
              },
              {
                "system" : "urn:oid:2.51.1.3",
                "value" : "7601001398511"
              }
            ],
            "name" : "SMC"
          }
        ],
        "identifier" : [
          {
            "system" : "http://fhir.ch/ig/ch-epl/sid/authno",
            "value" : "6623101"
          }
        ],
        "subject" : [
          {
            "reference" : "MedicinalProductDefinition/Keytruda-100mg-Vial"
          }
        ],
        "type" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type",
              "code" : "756000002001",
              "display" : "Marketing Authorisation"
            }
          ]
        },
        "region" : [
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
        "status" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-authorisation-status",
              "code" : "756005023007",
              "display" : "valid"
            }
          ]
        },
        "statusDate" : "2022-02-17",
        "holder" : {
          "reference" : "#holder-MSD-Merck-Sharp-Dohme-AG"
        },
        "regulator" : {
          "reference" : "#regulator-SMC"
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPPackagedProductDefinition/PMP-Keytruda-100mg-4ml-Solution-for-Infusion",
      "resource" : {
        "resourceType" : "PackagedProductDefinition",
        "id" : "PMP-Keytruda-100mg-4ml-Solution-for-Infusion",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"PackagedProductDefinition_PMP-Keytruda-100mg-4ml-Solution-for-Infusion\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PackagedProductDefinition PMP-Keytruda-100mg-4ml-Solution-for-Infusion</b></p><a name=\"PMP-Keytruda-100mg-4ml-Solution-for-Infusion\"> </a><a name=\"hcPMP-Keytruda-100mg-4ml-Solution-for-Infusion\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-packagedproductdefinition.html\">IDMP PackagedProductDefinition</a></p></div><p><b>identifier</b>: <a href=\"NamingSystem-PCID.html\" title=\"Temporary Identifier in this implementation guide until officially released by Swissmedic\">Clinical Product Identifier</a>/CH-7601001001138-6623101-001</p><p><b>packageFor</b>: <a href=\"MedicinalProductDefinition-Keytruda-100mg-Vial.html\">MedicinalProductDefinition: extension = Concentrate for solution for infusion,Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001001138-6623101; indication = Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern &gt;3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie. \n; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Biologics,Originator product,07. STOFFWECHSEL</a></p><p><b>containedItemQuantity</b>: 1 Vial<span style=\"background: LightGoldenRodYellow\"> (Details: EDQM - Standard Terms  code15060000 = 'Vial')</span></p><p><b>description</b>: </p><div><p>KEYTRUDA Inf Konz 100 mg/4ml Durchstf</p>\n</div><h3>LegalStatusOfSupplies</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Code</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-legal-status-of-supply 756005022001}\">Medicinal product subject to medical or veterinary prescription single dispensation (A)</span></td></tr></table><blockquote><p><b>packaging</b></p><p><b>identifier</b>: <a href=\"NamingSystem-GTIN.html\" title=\"GS1 defines trade items as products or services that are priced, ordered or invoiced at any point in the supply chain.\">Global Trade Item Number</a>/7680662310018</p><p><b>type</b>: <span title=\"Codes:{http://standardterms.edqm.eu 30009000}\">Box</span></p><p><b>quantity</b>: 1</p><h3>ShelfLifeStorages</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Type</b></td><td><b>Period[x]</b></td><td><b>SpecialPrecautionsForStorage</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://spor.ema.europa.eu/v1/lists/100000073343 100000073406}\">Shelf life from manufacturing time</span></td><td>Das Arzneimittel darf nur bis zu dem auf dem Behälter mit «EXP» bezeichneten Datum verwendet werden.</td><td><span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage 756005042008}\">Do not store above 25°C</span></td></tr><tr><td style=\"display: none\">*</td><td> </td><td> </td><td><span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage 756005042004}\">protect from light</span></td></tr><tr><td style=\"display: none\">*</td><td> </td><td> </td><td><span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage 756005042011}\">Store in the original container</span></td></tr><tr><td style=\"display: none\">*</td><td> </td><td> </td><td><span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage 756005042011}\">Store in the original container</span></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://spor.ema.europa.eu/v1/lists/100000073343 100000073403}\">Shelf life of the medicinal product as packaged for sale</span></td><td>No display for Duration  (value: 24; unit: hour; system: http://unitsofmeasure.org; code: h)</td><td> </td></tr></table></blockquote></div>"
        },
        "identifier" : [
          {
            "system" : "http://fhir.ch/ig/ch-epl/sid/pcid",
            "value" : "CH-7601001001138-6623101-001"
          }
        ],
        "packageFor" : [
          {
            "reference" : "MedicinalProductDefinition/Keytruda-100mg-Vial"
          }
        ],
        "containedItemQuantity" : [
          {
            "value" : 1,
            "unit" : "Vial",
            "system" : "http://standardterms.edqm.eu",
            "code" : "15060000"
          }
        ],
        "description" : "KEYTRUDA Inf Konz 100 mg/4ml Durchstf",
        "legalStatusOfSupply" : [
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-legal-status-of-supply",
                  "code" : "756005022001",
                  "display" : "Medicinal product subject to medical or veterinary prescription single dispensation (A)"
                }
              ]
            }
          }
        ],
        "packaging" : {
          "identifier" : [
            {
              "system" : "urn:oid:2.51.1.1",
              "value" : "7680662310018"
            }
          ],
          "type" : {
            "coding" : [
              {
                "system" : "http://standardterms.edqm.eu",
                "code" : "30009000",
                "display" : "Box"
              }
            ]
          },
          "quantity" : 1,
          "shelfLifeStorage" : [
            {
              "type" : {
                "coding" : [
                  {
                    "system" : "http://spor.ema.europa.eu/v1/lists/100000073343",
                    "code" : "100000073406",
                    "display" : "Shelf life from manufacturing time"
                  }
                ]
              },
              "periodString" : "Das Arzneimittel darf nur bis zu dem auf dem Behälter mit «EXP» bezeichneten Datum verwendet werden.",
              "specialPrecautionsForStorage" : [
                {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage",
                      "code" : "756005042008",
                      "display" : "Do not store above 25°C"
                    }
                  ]
                }
              ]
            },
            {
              "specialPrecautionsForStorage" : [
                {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage",
                      "code" : "756005042004",
                      "display" : "protect from light"
                    }
                  ]
                }
              ]
            },
            {
              "specialPrecautionsForStorage" : [
                {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage",
                      "code" : "756005042011",
                      "display" : "Store in the original container"
                    }
                  ]
                }
              ]
            },
            {
              "specialPrecautionsForStorage" : [
                {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage",
                      "code" : "756005042011",
                      "display" : "Store in the original container"
                    }
                  ]
                }
              ]
            },
            {
              "type" : {
                "coding" : [
                  {
                    "system" : "http://spor.ema.europa.eu/v1/lists/100000073343",
                    "code" : "100000073403",
                    "display" : "Shelf life of the medicinal product as packaged for sale"
                  }
                ]
              },
              "periodDuration" : {
                "value" : 24,
                "unit" : "hour",
                "system" : "http://unitsofmeasure.org",
                "code" : "h"
              }
            }
          ]
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPRegulatedAuthorisation/MA-66231001",
      "resource" : {
        "resourceType" : "RegulatedAuthorization",
        "id" : "MA-66231001",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"RegulatedAuthorization_MA-66231001\"> </a><p class=\"res-header-id\"><b>Generated Narrative: RegulatedAuthorization MA-66231001</b></p><a name=\"MA-66231001\"> </a><a name=\"hcMA-66231001\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-regulatedauthorization.html\">IDMP RegulatedAuthorization</a></p></div><p><b>identifier</b>: <a href=\"NamingSystem-AuthNo.html\" title=\"Temporary Identifier in this implementation guide until officially released by Swissmedic\">Marketing Authorisation Number</a>/66231001</p><p><b>subject</b>: <a href=\"PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.html\">PackagedProductDefinition: identifier = http://fhir.ch/ig/ch-epl/sid/pcid#Clinical Product Identifier#CH-7601001001138-6623101-001; containedItemQuantity = 1 Vial; description = KEYTRUDA Inf Konz 100 mg/4ml Durchstf</a></p><p><b>type</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type 756000002001}\">Marketing Authorisation</span></p><p><b>region</b>: <span title=\"Codes:{urn:iso:std:iso:3166 CH}\">Switzerland</span></p><p><b>status</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-authorisation-status 756005023007}\">valid</span></p><p><b>statusDate</b>: 2022-02-17</p><p><b>holder</b>: <a href=\"#hcMA-66231001/holder-MSD-Merck-Sharp-Dohme-AG\">Organization MSD Merck Sharp &amp; Dohme AG</a></p><p><b>regulator</b>: <a href=\"#hcMA-66231001/regulator-SMC\">Organization SMC</a></p><hr/><blockquote><p class=\"res-header-id\"><b>Generated Narrative: Organization #holder-MSD-Merck-Sharp-Dohme-AG</b></p><a name=\"MA-66231001/holder-MSD-Merck-Sharp-Dohme-AG\"> </a><a name=\"hcMA-66231001/holder-MSD-Merck-Sharp-Dohme-AG\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-epl-organization.html\">CH EPL Organization</a></p></div><p><b>identifier</b>: <a href=\"NamingSystem-LOC.html\" title=\"Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS)\">LOC Identifier</a>/100080484, <a href=\"NamingSystem-GLN.html\" title=\"Identifier holding a number for GLN (Global Location Number)\">GLN Identifier</a>/7601001001138</p><p><b>name</b>: MSD Merck Sharp &amp; Dohme AG</p></blockquote><hr/><blockquote><p class=\"res-header-id\"><b>Generated Narrative: Organization #regulator-SMC</b></p><a name=\"MA-66231001/regulator-SMC\"> </a><a name=\"hcMA-66231001/regulator-SMC\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-epl-organization.html\">CH EPL Organization</a></p></div><p><b>identifier</b>: <a href=\"NamingSystem-LOC.html\" title=\"Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS)\">LOC Identifier</a>/100010911, <a href=\"NamingSystem-GLN.html\" title=\"Identifier holding a number for GLN (Global Location Number)\">GLN Identifier</a>/7601001398511</p><p><b>name</b>: SMC</p></blockquote></div>"
        },
        "contained" : [
          {
            "resourceType" : "Organization",
            "id" : "holder-MSD-Merck-Sharp-Dohme-AG",
            "meta" : {
              "profile" : [
                "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
              ]
            },
            "identifier" : [
              {
                "system" : "urn:oid:1.2.276.0.76",
                "value" : "100080484"
              },
              {
                "system" : "urn:oid:2.51.1.3",
                "value" : "7601001001138"
              }
            ],
            "name" : "MSD Merck Sharp & Dohme AG"
          },
          {
            "resourceType" : "Organization",
            "id" : "regulator-SMC",
            "meta" : {
              "profile" : [
                "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
              ]
            },
            "identifier" : [
              {
                "system" : "urn:oid:1.2.276.0.76",
                "value" : "100010911"
              },
              {
                "system" : "urn:oid:2.51.1.3",
                "value" : "7601001398511"
              }
            ],
            "name" : "SMC"
          }
        ],
        "identifier" : [
          {
            "system" : "http://fhir.ch/ig/ch-epl/sid/authno",
            "value" : "66231001"
          }
        ],
        "subject" : [
          {
            "reference" : "PackagedProductDefinition/PMP-Keytruda-100mg-4ml-Solution-for-Infusion"
          }
        ],
        "type" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type",
              "code" : "756000002001",
              "display" : "Marketing Authorisation"
            }
          ]
        },
        "region" : [
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
        "status" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-authorisation-status",
              "code" : "756005023007",
              "display" : "valid"
            }
          ]
        },
        "statusDate" : "2022-02-17",
        "holder" : {
          "reference" : "#holder-MSD-Merck-Sharp-Dohme-AG"
        },
        "regulator" : {
          "reference" : "#regulator-SMC"
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPRegulatedAuthorisation/FOPH-20416",
      "resource" : {
        "resourceType" : "RegulatedAuthorization",
        "id" : "FOPH-20416",
        "text" : {
          "status" : "extensions",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"RegulatedAuthorization_FOPH-20416\"> </a><p class=\"res-header-id\"><b>Generated Narrative: RegulatedAuthorization FOPH-20416</b></p><a name=\"FOPH-20416\"> </a><a name=\"hcFOPH-20416\"> </a><blockquote><p><b>CH - EPL Reimbursement SL</b></p><ul><li>FOPHDossierNumber: <a href=\"NamingSystem-Dossier.html\" title=\"Identifier holding the Dossier number of FOPH\">FOPH Dossier Number</a>/20416</li><li>status: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-reimbursement-status 756001021001}\">Reimbursed</span></li><li>statusDate: 2023-01-01</li><li>expiryDate: 2025-03-31</li><li>listingStatus: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-listing-status 756001002001}\">Listed</span></li><li>listingPeriod: 2023-01-01 --&gt; 2024-12-31</li><li>firstListingDate: 2017-09-01</li><li>costShare: 10</li><li>gamme: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-gamme 756002004009}\">Parenteral Depot</span></li></ul></blockquote><blockquote><p><b>CH - EPL Product Price</b></p><ul><li>value: <span title=\"Swiss Franc\">CHF4,407.68</span> (CHF)</li><li>type: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type 756002005002}\">Ex-factory price</span></li><li>changeType: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change 756002006006}\">Normal price mutation</span></li><li>changeDate: 2023-01-01</li></ul></blockquote><blockquote><p><b>CH - EPL Product Price</b></p><ul><li>value: <span title=\"Swiss Franc\">CHF4,768.50</span> (CHF)</li><li>type: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type 756002005001}\">Retail price</span></li><li>changeType: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change 756002006005}\">VAT-change</span></li><li>changeDate: 2024-01-01</li></ul></blockquote><p><b>subject</b>: <a href=\"PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.html\">PackagedProductDefinition: identifier = http://fhir.ch/ig/ch-epl/sid/pcid#Clinical Product Identifier#CH-7601001001138-6623101-001; containedItemQuantity = 1 Vial; description = KEYTRUDA Inf Konz 100 mg/4ml Durchstf</a></p><p><b>type</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type 756000002003}\">Reimbursement SL</span></p><h3>Indications</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Extension</b></td><td><b>Reference</b></td></tr><tr><td style=\"display: none\">*</td><td/><td><a href=\"ClinicalUseDefinition-IND-10075566.html\">ClinicalUseDefinition: type = indication</a></td></tr></table><p><b>holder</b>: <a href=\"#hcFOPH-20416/holder-MSD-Merck-Sharp-Dohme-AG\">Organization MSD Merck Sharp &amp; Dohme AG</a></p><hr/><blockquote><p class=\"res-header-id\"><b>Generated Narrative: Organization #holder-MSD-Merck-Sharp-Dohme-AG</b></p><a name=\"FOPH-20416/holder-MSD-Merck-Sharp-Dohme-AG\"> </a><a name=\"hcFOPH-20416/holder-MSD-Merck-Sharp-Dohme-AG\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-epl-organization.html\">CH EPL Organization</a></p></div><p><b>identifier</b>: <a href=\"NamingSystem-LOC.html\" title=\"Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS)\">LOC Identifier</a>/100080484, <a href=\"NamingSystem-GLN.html\" title=\"Identifier holding a number for GLN (Global Location Number)\">GLN Identifier</a>/7601001001138</p><p><b>name</b>: MSD Merck Sharp &amp; Dohme AG</p></blockquote></div>"
        },
        "contained" : [
          {
            "resourceType" : "Organization",
            "id" : "holder-MSD-Merck-Sharp-Dohme-AG",
            "meta" : {
              "profile" : [
                "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
              ]
            },
            "identifier" : [
              {
                "system" : "urn:oid:1.2.276.0.76",
                "value" : "100080484"
              },
              {
                "system" : "urn:oid:2.51.1.3",
                "value" : "7601001001138"
              }
            ],
            "name" : "MSD Merck Sharp & Dohme AG"
          }
        ],
        "extension" : [
          {
            "extension" : [
              {
                "url" : "FOPHDossierNumber",
                "valueIdentifier" : {
                  "system" : "urn:oid:2.16.756.1",
                  "value" : "20416"
                }
              },
              {
                "url" : "status",
                "valueCodeableConcept" : {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-reimbursement-status",
                      "code" : "756001021001",
                      "display" : "Reimbursed"
                    }
                  ]
                }
              },
              {
                "url" : "statusDate",
                "valueDate" : "2023-01-01"
              },
              {
                "url" : "expiryDate",
                "valueDate" : "2025-03-31"
              },
              {
                "url" : "listingStatus",
                "valueCodeableConcept" : {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-listing-status",
                      "code" : "756001002001",
                      "display" : "Listed"
                    }
                  ]
                }
              },
              {
                "url" : "listingPeriod",
                "valuePeriod" : {
                  "start" : "2023-01-01",
                  "end" : "2024-12-31"
                }
              },
              {
                "url" : "firstListingDate",
                "valueDate" : "2017-09-01"
              },
              {
                "url" : "costShare",
                "valueInteger" : 10
              },
              {
                "url" : "gamme",
                "valueCodeableConcept" : {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-gamme",
                      "code" : "756002004009",
                      "display" : "Parenteral Depot"
                    }
                  ]
                }
              }
            ],
            "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/reimbursementSL"
          },
          {
            "extension" : [
              {
                "url" : "value",
                "valueMoney" : {
                  "value" : 4407.68,
                  "currency" : "CHF"
                }
              },
              {
                "url" : "type",
                "valueCodeableConcept" : {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
                      "code" : "756002005002",
                      "display" : "Ex-factory price"
                    }
                  ]
                }
              },
              {
                "url" : "changeType",
                "valueCodeableConcept" : {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
                      "code" : "756002006006",
                      "display" : "Normal price mutation"
                    }
                  ]
                }
              },
              {
                "url" : "changeDate",
                "valueDate" : "2023-01-01"
              }
            ],
            "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
          },
          {
            "extension" : [
              {
                "url" : "value",
                "valueMoney" : {
                  "value" : 4768.5,
                  "currency" : "CHF"
                }
              },
              {
                "url" : "type",
                "valueCodeableConcept" : {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
                      "code" : "756002005001",
                      "display" : "Retail price"
                    }
                  ]
                }
              },
              {
                "url" : "changeType",
                "valueCodeableConcept" : {
                  "coding" : [
                    {
                      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
                      "code" : "756002006005",
                      "display" : "VAT-change"
                    }
                  ]
                }
              },
              {
                "url" : "changeDate",
                "valueDate" : "2024-01-01"
              }
            ],
            "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
          }
        ],
        "subject" : [
          {
            "reference" : "PackagedProductDefinition/PMP-Keytruda-100mg-4ml-Solution-for-Infusion"
          }
        ],
        "type" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type",
              "code" : "756000002003",
              "display" : "Reimbursement SL"
            }
          ]
        },
        "indication" : [
          {
            "extension" : [
              {
                "extension" : [
                  {
                    "url" : "status",
                    "valueCodeableConcept" : {
                      "coding" : [
                        {
                          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
                          "code" : "756002071001",
                          "display" : "Limitation Reimbursed"
                        }
                      ]
                    }
                  },
                  {
                    "url" : "statusDate",
                    "valueDate" : "2023-01-01"
                  },
                  {
                    "url" : "period",
                    "valuePeriod" : {
                      "start" : "2023-01-01",
                      "end" : "2024-12-31"
                    }
                  },
                  {
                    "url" : "reimbursementEndDate",
                    "valueDate" : "2025-03-31"
                  },
                  {
                    "url" : "firstLimitationDate",
                    "valueDate" : "2023-01-01"
                  },
                  {
                    "url" : "indicationCode",
                    "valueString" : "20416.17"
                  },
                  {
                    "url" : "limitationIndication",
                    "valueReference" : {
                      "reference" : "ClinicalUseDefinition/LIM-254837009"
                    }
                  },
                  {
                    "extension" : [
                      {
                        "url" : "value",
                        "valueMoney" : {
                          "value" : 4407.68,
                          "currency" : "CHF"
                        }
                      },
                      {
                        "url" : "type",
                        "valueCodeableConcept" : {
                          "coding" : [
                            {
                              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
                              "code" : "756002005002",
                              "display" : "Ex-factory price"
                            }
                          ]
                        }
                      },
                      {
                        "url" : "changeType",
                        "valueCodeableConcept" : {
                          "coding" : [
                            {
                              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
                              "code" : "756002006006",
                              "display" : "Normal price mutation"
                            }
                          ]
                        }
                      },
                      {
                        "url" : "changeDate",
                        "valueDate" : "2023-01-01"
                      }
                    ],
                    "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
                  },
                  {
                    "extension" : [
                      {
                        "url" : "value",
                        "valueMoney" : {
                          "value" : 4768.5,
                          "currency" : "CHF"
                        }
                      },
                      {
                        "url" : "type",
                        "valueCodeableConcept" : {
                          "coding" : [
                            {
                              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
                              "code" : "756002005001",
                              "display" : "Retail price"
                            }
                          ]
                        }
                      },
                      {
                        "url" : "changeType",
                        "valueCodeableConcept" : {
                          "coding" : [
                            {
                              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
                              "code" : "756002006005",
                              "display" : "VAT-change"
                            }
                          ]
                        }
                      },
                      {
                        "url" : "changeDate",
                        "valueDate" : "2024-01-01"
                      }
                    ],
                    "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
                  }
                ],
                "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
              }
            ],
            "reference" : {
              "reference" : "ClinicalUseDefinition/IND-10075566"
            }
          }
        ],
        "holder" : {
          "reference" : "#holder-MSD-Merck-Sharp-Dohme-AG"
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPManufacturedItemDefinition/MI-Pembrolizumab-100mg-Vial",
      "resource" : {
        "resourceType" : "ManufacturedItemDefinition",
        "id" : "MI-Pembrolizumab-100mg-Vial",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ManufacturedItemDefinition_MI-Pembrolizumab-100mg-Vial\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ManufacturedItemDefinition MI-Pembrolizumab-100mg-Vial</b></p><a name=\"MI-Pembrolizumab-100mg-Vial\"> </a><a name=\"hcMI-Pembrolizumab-100mg-Vial\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-manufactureditemdefinition.html\">CH IDMP ManufacturedItemDefinition</a></p></div><p><b>status</b>: Active</p><p><b>manufacturedDoseForm</b>: <span title=\"Codes:{http://standardterms.edqm.eu 10221000}\">Film-coated tablet</span></p><p><b>unitOfPresentation</b>: <span title=\"Codes:{http://standardterms.edqm.eu 15060000}\">Vial</span></p></div>"
        },
        "status" : "active",
        "manufacturedDoseForm" : {
          "coding" : [
            {
              "system" : "http://standardterms.edqm.eu",
              "code" : "10221000",
              "display" : "Film-coated tablet"
            }
          ]
        },
        "unitOfPresentation" : {
          "coding" : [
            {
              "system" : "http://standardterms.edqm.eu",
              "code" : "15060000",
              "display" : "Vial"
            }
          ]
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPAdministrableProductDefinition/PhP-Pembrolizumab-100mg-Vial",
      "resource" : {
        "resourceType" : "AdministrableProductDefinition",
        "id" : "PhP-Pembrolizumab-100mg-Vial",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-administrableproductdefinition"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"AdministrableProductDefinition_PhP-Pembrolizumab-100mg-Vial\"> </a><p class=\"res-header-id\"><b>Generated Narrative: AdministrableProductDefinition PhP-Pembrolizumab-100mg-Vial</b></p><a name=\"PhP-Pembrolizumab-100mg-Vial\"> </a><a name=\"hcPhP-Pembrolizumab-100mg-Vial\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-administrableproductdefinition.html\">CH IDMP AdministrableProductDefinition</a></p></div><p><b>status</b>: Active</p><p><b>formOf</b>: <a href=\"MedicinalProductDefinition-Keytruda-100mg-Vial.html\">MedicinalProductDefinition: extension = Concentrate for solution for infusion,Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001001138-6623101; indication = Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern &gt;3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie. \n; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Biologics,Originator product,07. STOFFWECHSEL</a></p><p><b>administrableDoseForm</b>: <span title=\"Codes:{http://standardterms.edqm.eu 11210000}\">Solution for infusion</span></p><p><b>unitOfPresentation</b>: <span title=\"Codes:{http://standardterms.edqm.eu 15060000}\">Vial</span></p><h3>RouteOfAdministrations</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Code</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://standardterms.edqm.eu 20045000}\">Intravenous use</span></td></tr></table></div>"
        },
        "status" : "active",
        "formOf" : [
          {
            "reference" : "MedicinalProductDefinition/Keytruda-100mg-Vial"
          }
        ],
        "administrableDoseForm" : {
          "coding" : [
            {
              "system" : "http://standardterms.edqm.eu",
              "code" : "11210000",
              "display" : "Solution for infusion"
            }
          ]
        },
        "unitOfPresentation" : {
          "coding" : [
            {
              "system" : "http://standardterms.edqm.eu",
              "code" : "15060000",
              "display" : "Vial"
            }
          ]
        },
        "routeOfAdministration" : [
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://standardterms.edqm.eu",
                  "code" : "20045000",
                  "display" : "Intravenous use"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPIngredient/Pembrolizumab100",
      "resource" : {
        "resourceType" : "Ingredient",
        "id" : "Pembrolizumab100",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-ingredient"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Ingredient_Pembrolizumab100\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Ingredient Pembrolizumab100</b></p><a name=\"Pembrolizumab100\"> </a><a name=\"hcPembrolizumab100\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-ingredient.html\">IDMP Ingredient</a></p></div><p><b>status</b>: Active</p><p><b>for</b>: </p><ul><li><a href=\"AdministrableProductDefinition-PhP-Pembrolizumab-100mg-Vial.html\">AdministrableProductDefinition: status = active; administrableDoseForm = Solution for infusion; unitOfPresentation = Vial</a></li><li><a href=\"ManufacturedItemDefinition-MI-Pembrolizumab-100mg-Vial.html\">ManufacturedItemDefinition: status = active; manufacturedDoseForm = Film-coated tablet; unitOfPresentation = Vial</a></li></ul><p><b>role</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-ingredient-role 756005051001}\">Active</span></p><blockquote><p><b>substance</b></p><h3>Codes</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-substance DPT0O3T46P}\">Pembrolizumab</span></td></tr></table><h3>Strengths</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Presentation[x]</b></td></tr><tr><td style=\"display: none\">*</td><td>100 mg<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemg = 'mg')</span>/1 Vial<span style=\"background: LightGoldenRodYellow\"> (Details: EDQM - Standard Terms  code15060000 = 'Vial')</span></td></tr></table></blockquote></div>"
        },
        "status" : "active",
        "for" : [
          {
            "reference" : "AdministrableProductDefinition/PhP-Pembrolizumab-100mg-Vial"
          },
          {
            "reference" : "ManufacturedItemDefinition/MI-Pembrolizumab-100mg-Vial"
          }
        ],
        "role" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-ingredient-role",
              "code" : "756005051001",
              "display" : "Active"
            }
          ]
        },
        "substance" : {
          "code" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-substance",
                  "code" : "DPT0O3T46P",
                  "display" : "Pembrolizumab"
                }
              ]
            }
          },
          "strength" : [
            {
              "presentationRatio" : {
                "numerator" : {
                  "value" : 100,
                  "unit" : "mg",
                  "system" : "http://unitsofmeasure.org",
                  "code" : "mg"
                },
                "denominator" : {
                  "value" : 1,
                  "unit" : "Vial",
                  "system" : "http://standardterms.edqm.eu",
                  "code" : "15060000"
                }
              }
            }
          ]
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPClinicalUseDefinition/IND-10027400",
      "resource" : {
        "resourceType" : "ClinicalUseDefinition",
        "id" : "IND-10027400",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ClinicalUseDefinition_IND-10027400\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ClinicalUseDefinition IND-10027400</b></p><a name=\"IND-10027400\"> </a><a name=\"hcIND-10027400\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-clinicalusedefinition-indication.html\">CH IDMP ClinicalUseDefinition Indication</a></p></div><p><b>type</b>: Indication</p><p><b>subject</b>: <a href=\"MedicinalProductDefinition-Keytruda-100mg-Vial.html\">MedicinalProductDefinition: extension = Concentrate for solution for infusion,Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001001138-6623101; indication = Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern &gt;3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie. \n; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Biologics,Originator product,07. STOFFWECHSEL</a></p><blockquote><p><b>indication</b></p><h3>DiseaseSymptomProcedures</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{https://www.meddra.org 10027400}\">Melanom</span></td></tr></table><h3>IntendedEffects</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://spor.ema.europa.eu/v1/lists/200000003186 200000003194}\">therapeutic</span></td></tr></table></blockquote></div>"
        },
        "type" : "indication",
        "subject" : [
          {
            "reference" : "MedicinalProductDefinition/Keytruda-100mg-Vial"
          }
        ],
        "indication" : {
          "diseaseSymptomProcedure" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "https://www.meddra.org",
                  "code" : "10027400",
                  "display" : "Melanom"
                }
              ]
            }
          },
          "intendedEffect" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
                  "code" : "200000003194",
                  "display" : "therapeutic"
                }
              ]
            }
          }
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPClinicalUseDefinition/IND-10075566",
      "resource" : {
        "resourceType" : "ClinicalUseDefinition",
        "id" : "IND-10075566",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ClinicalUseDefinition_IND-10075566\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ClinicalUseDefinition IND-10075566</b></p><a name=\"IND-10075566\"> </a><a name=\"hcIND-10075566\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-clinicalusedefinition-indication.html\">CH IDMP ClinicalUseDefinition Indication</a></p></div><p><b>type</b>: Indication</p><p><b>subject</b>: <a href=\"MedicinalProductDefinition-Keytruda-100mg-Vial.html\">MedicinalProductDefinition: extension = Concentrate for solution for infusion,Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001001138-6623101; indication = Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern &gt;3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie. \n; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Biologics,Originator product,07. STOFFWECHSEL</a></p><blockquote><p><b>indication</b></p><h3>DiseaseSymptomProcedures</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{https://www.meddra.org 10075566}\">Triple negative breast cancer</span></td></tr></table><h3>IntendedEffects</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://spor.ema.europa.eu/v1/lists/200000003186 200000003194}\">therapeutic</span></td></tr></table></blockquote></div>"
        },
        "type" : "indication",
        "subject" : [
          {
            "reference" : "MedicinalProductDefinition/Keytruda-100mg-Vial"
          }
        ],
        "indication" : {
          "diseaseSymptomProcedure" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "https://www.meddra.org",
                  "code" : "10075566",
                  "display" : "Triple negative breast cancer"
                }
              ]
            }
          },
          "intendedEffect" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
                  "code" : "200000003194",
                  "display" : "therapeutic"
                }
              ]
            }
          }
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPClinicalUseDefinition/IND-10028881",
      "resource" : {
        "resourceType" : "ClinicalUseDefinition",
        "id" : "IND-10028881",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ClinicalUseDefinition_IND-10028881\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ClinicalUseDefinition IND-10028881</b></p><a name=\"IND-10028881\"> </a><a name=\"hcIND-10028881\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-clinicalusedefinition-indication.html\">CH IDMP ClinicalUseDefinition Indication</a></p></div><p><b>type</b>: Indication</p><p><b>subject</b>: <a href=\"MedicinalProductDefinition-Keytruda-100mg-Vial.html\">MedicinalProductDefinition: extension = Concentrate for solution for infusion,Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001001138-6623101; indication = Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern &gt;3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie. \n; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Biologics,Originator product,07. STOFFWECHSEL</a></p><blockquote><p><b>indication</b></p><h3>DiseaseSymptomProcedures</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{https://www.meddra.org 10028881}\">Nicht-kleinzelliges Lungenkarzinom</span></td></tr></table><h3>IntendedEffects</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://spor.ema.europa.eu/v1/lists/200000003186 200000003194}\">therapeutic</span></td></tr></table></blockquote></div>"
        },
        "type" : "indication",
        "subject" : [
          {
            "reference" : "MedicinalProductDefinition/Keytruda-100mg-Vial"
          }
        ],
        "indication" : {
          "diseaseSymptomProcedure" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "https://www.meddra.org",
                  "code" : "10028881",
                  "display" : "Nicht-kleinzelliges Lungenkarzinom"
                }
              ]
            }
          },
          "intendedEffect" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
                  "code" : "200000003194",
                  "display" : "therapeutic"
                }
              ]
            }
          }
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPClinicalUseDefinition/IND-10021782",
      "resource" : {
        "resourceType" : "ClinicalUseDefinition",
        "id" : "IND-10021782",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ClinicalUseDefinition_IND-10021782\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ClinicalUseDefinition IND-10021782</b></p><a name=\"IND-10021782\"> </a><a name=\"hcIND-10021782\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-clinicalusedefinition-indication.html\">CH IDMP ClinicalUseDefinition Indication</a></p></div><p><b>type</b>: Indication</p><p><b>subject</b>: <a href=\"MedicinalProductDefinition-Keytruda-100mg-Vial.html\">MedicinalProductDefinition: extension = Concentrate for solution for infusion,Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001001138-6623101; indication = Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern &gt;3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie. \n; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Biologics,Originator product,07. STOFFWECHSEL</a></p><blockquote><p><b>indication</b></p><h3>DiseaseSymptomProcedures</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{https://www.meddra.org 10021782}\">Kopf- und Halskarzinom</span></td></tr></table><h3>IntendedEffects</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://spor.ema.europa.eu/v1/lists/200000003186 200000003194}\">therapeutic</span></td></tr></table></blockquote></div>"
        },
        "type" : "indication",
        "subject" : [
          {
            "reference" : "MedicinalProductDefinition/Keytruda-100mg-Vial"
          }
        ],
        "indication" : {
          "diseaseSymptomProcedure" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "https://www.meddra.org",
                  "code" : "10021782",
                  "display" : "Kopf- und Halskarzinom"
                }
              ]
            }
          },
          "intendedEffect" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
                  "code" : "200000003194",
                  "display" : "therapeutic"
                }
              ]
            }
          }
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPClinicalUseDefinition/IND-10019927",
      "resource" : {
        "resourceType" : "ClinicalUseDefinition",
        "id" : "IND-10019927",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ClinicalUseDefinition_IND-10019927\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ClinicalUseDefinition IND-10019927</b></p><a name=\"IND-10019927\"> </a><a name=\"hcIND-10019927\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-clinicalusedefinition-indication.html\">CH IDMP ClinicalUseDefinition Indication</a></p></div><p><b>type</b>: Indication</p><p><b>subject</b>: <a href=\"MedicinalProductDefinition-Keytruda-100mg-Vial.html\">MedicinalProductDefinition: extension = Concentrate for solution for infusion,Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001001138-6623101; indication = Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern &gt;3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie. \n; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Biologics,Originator product,07. STOFFWECHSEL</a></p><blockquote><p><b>indication</b></p><h3>DiseaseSymptomProcedures</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{https://www.meddra.org 10019927}\">Klassisches Hodgkin Lymphom</span></td></tr></table><h3>IntendedEffects</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://spor.ema.europa.eu/v1/lists/200000003186 200000003194}\">therapeutic</span></td></tr></table></blockquote></div>"
        },
        "type" : "indication",
        "subject" : [
          {
            "reference" : "MedicinalProductDefinition/Keytruda-100mg-Vial"
          }
        ],
        "indication" : {
          "diseaseSymptomProcedure" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "https://www.meddra.org",
                  "code" : "10019927",
                  "display" : "Klassisches Hodgkin Lymphom"
                }
              ]
            }
          },
          "intendedEffect" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
                  "code" : "200000003194",
                  "display" : "therapeutic"
                }
              ]
            }
          }
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPClinicalUseDefinition/IND-10043971",
      "resource" : {
        "resourceType" : "ClinicalUseDefinition",
        "id" : "IND-10043971",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ClinicalUseDefinition_IND-10043971\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ClinicalUseDefinition IND-10043971</b></p><a name=\"IND-10043971\"> </a><a name=\"hcIND-10043971\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-idmp-clinicalusedefinition-indication.html\">CH IDMP ClinicalUseDefinition Indication</a></p></div><p><b>type</b>: Indication</p><p><b>subject</b>: <a href=\"MedicinalProductDefinition-Keytruda-100mg-Vial.html\">MedicinalProductDefinition: extension = Concentrate for solution for infusion,Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001001138-6623101; indication = Melanom: nicht resezierbar oder metastasiert; adjuvante Therapie bei vollständig reseziertem Melanom Stadium III.\nMetastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit Tumour proportion score (TPS) ≥50% und ohne EGFR- oder ALK-Mutationen als Erstlinientherapie.\nMetastasiertes nicht-plattenepitheliales nicht-kleinzelliges Lungenkarzinom: ohne EGFR- oder ALK-Mutationen als Erstlinientherapie in Kombination mit Pemetrexed und einem Platinderivat.\nMetastasiertes plattenepithelialen nicht-kleinzelliges Lungenkarzinom: als Erstlinientherapie in Kombination mit Carboplatin und Paclitaxel oder in Kombination mit Carboplatin und Nab-Paclitaxel.\nFortgeschrittenes metastasiertes nicht-kleinzelliges Lungenkarzinom: mit PD-L1 Expression mit TPS ≥1% nach vorausgegangener Chemotherapie.\nPD-L1 exprimierendes Plattenepithelkarzinom des Kopf-Hals-Bereichs: rezidivierend, nicht kurativ anzugehen, lokal fortgeschritten oder metastasiert in Kombination mit Platin- und 5-Fluorouracil-haltiger Chemotherapie oder als Monotherapie nach Vorbehandlung mit Platin-basierter Chemotherapie bei TPS ≥50%.\nRefraktäres oder rezidivierendes klassisches Hodgkin Lymphom: bei Erwachsenen, wenn eine autologe oder allogene Stammzelltransplantation nicht in Frage kommt oder bei Kindern &gt;3 J. und Jugendlichen, wenn andere Therapien ungeeignet sind.\nLokal fortgeschrittenes oder metastasiertes Urothelkarzinom: als Monotherapie nach platin-basierter Chemotherapie.\nNicht reserzierbares oder metastasiertes Urothelkarzinom: als Erstlinientherapie in Kombination mit Enfortumab vedotin.\nReserziertes, klarzelliges Nierenzellkarzinom: als adjuvante Monotherapie bei intermediär-hohem oder hohem Rezidivrisiko.\nFortgeschrittenes, metastasiertes oder rezidivierendes Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Axitinib bei intermediärem/ungünstigem Risikoprofil.\nFortgeschrittenes (nicht resezierbares oder metastasiertes) Nierenzellkarzinom: als Erstlinientherapie in Kombination mit Lenvatinib bei intermediärem/ungünstigem Risikoprofil.\nRefraktäres oder rezidivierendes primäres mediastinales grosszelliges B-Zell-Lymphom: nach min. 2 Vorbehandlungen (min. 1 Behandlung mit Rituximab), wenn eine autologe Stammzelltransplantation nicht in Frage kommt oder bei Rückfall nach Transplantation.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes HER2-positives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Trastuzumab, Fluorpyrimidin- und platinbasierter Chemotherapie.\nLokal fortgeschrittenes, nicht reserzierbares oder metastasiertes HER2-negatives Adenokarzinom des Magens oder des gastro-ösophagealen Übergangs: mit einer PD-L1-Expression (CPS≥1) als Erstlinientherapie in Kombination mit Fluoropyrimidin- und platinhaltiger Chemotherapie.\nLokal fortgeschrittenes, nicht resezierbares oder metastasiertes biliäres Karzinom: Erstlinientherapie in Kombination mit Gemcitabin und Cisplatin.\nLokal rezidivierendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom: mit einer PD-L1-Expression mit CPS ≥10 und ohne vorherige Chemotherapie bei metastasierter Erkrankung in Kombination mit Chemotherapie.\nFortgeschrittenes Endometriumkarzinom ohne hohe Mikrosatelliteninstabilität oder fehlerhafte DNA-Mismatch-Reparatur: in Kombination mit Lenvatinib bei Progression nach einer platinbasierten Chemotherapie und wenn eine kurative Operation oder Bestrahlung ungeeignet ist.\nPersistierendes, rezidivierendes oder metastasiertes Zervixkarzinom: mit einer PD-L1-Expression (CPS≥1) ohne vorherige systemische Therapie in Kombination mit Platin-Chemotherapie und Paclitaxel mit oder ohne Bevacizumab.\nTumore mit hoher Mikrosatelliteninstabilität oder fehlerhafter DNA-Mismatch-Reparatur: nicht reserzierbares oder metastasiertes kolorektales Karzinom nach vorangegangener Fluoropyrimidin-basierter Therapie in Kombination mit Irinotecan oder Oxaliplatin; metastasierte Endometriumkarzinom, Magenkarzinom, Dünndarmkarzinom oder Gallengangskarzinom mit Progression nach Standardtherapie und ohne befriedigende therapeutische Alternativen; Erstlinientherapie des metastasierten kolorektalen Karzinoms.\nBefristet zugelassene Indikationen: adjuvante Monotherapie des Melanoms im Stadium IIB oder IIC nach vollständiger Resektion; adjuvante Monotherapie des nicht-kleinzelligen Lungenkarzinoms im Stadium IB, II oder IIIA nach vollständiger Resektion und ohne Rezidiv nach platinbasierter Chemotherapie. \n; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Biologics,Originator product,07. STOFFWECHSEL</a></p><blockquote><p><b>indication</b></p><h3>DiseaseSymptomProcedures</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{https://www.meddra.org 10043971}\">Primäres mediastinales grosszelliges B-Zell-Lymphom</span></td></tr></table><h3>IntendedEffects</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://spor.ema.europa.eu/v1/lists/200000003186 200000003194}\">therapeutic</span></td></tr></table></blockquote></div>"
        },
        "type" : "indication",
        "subject" : [
          {
            "reference" : "MedicinalProductDefinition/Keytruda-100mg-Vial"
          }
        ],
        "indication" : {
          "diseaseSymptomProcedure" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "https://www.meddra.org",
                  "code" : "10043971",
                  "display" : "Primäres mediastinales grosszelliges B-Zell-Lymphom"
                }
              ]
            }
          },
          "intendedEffect" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
                  "code" : "200000003194",
                  "display" : "therapeutic"
                }
              ]
            }
          }
        }
      }
    },
    {
      "fullUrl" : "http://fhir.epl.bag.admin.ch/CHIDMPClinicalUseDefinition/LIM-254837009",
      "resource" : {
        "resourceType" : "ClinicalUseDefinition",
        "id" : "LIM-254837009",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ClinicalUseDefinition_LIM-254837009\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ClinicalUseDefinition LIM-254837009</b></p><a name=\"LIM-254837009\"> </a><a name=\"hcLIM-254837009\"> </a><p><b>type</b>: Indication</p><blockquote><p><b>indication</b></p><h3>DiseaseSymptomProcedures</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://snomed.info/sct 254837009}\">Malignant tumor of breast</span></td></tr></table><h3>IntendedEffects</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Concept</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://spor.ema.europa.eu/v1/lists/200000003186 200000003194}\">therapeutic</span></td></tr></table></blockquote></div>"
        },
        "type" : "indication",
        "indication" : {
          "diseaseSymptomProcedure" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "254837009",
                  "display" : "Malignant tumor of breast"
                }
              ]
            }
          },
          "intendedEffect" : {
            "concept" : {
              "coding" : [
                {
                  "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
                  "code" : "200000003194",
                  "display" : "therapeutic"
                }
              ]
            }
          }
        }
      }
    }
  ]
}

```
