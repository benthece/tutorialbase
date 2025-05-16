import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';
import axios from 'axios';

@Injectable({
  providedIn: 'root'
})
export class ReportServiceService {

  private reasonList = [
    { id: 'serto_tartalom', name: 'Sértő tartalom' },
    { id: 'spam', name: 'Spam' },
    { id: 'felrevezeto_info', name: 'Félrevezető információ' },
    { id: 'nem_megfelelo', name: 'Nem megfelelő tartalom' },
    { id: 'egyeb', name: 'Egyéb' }
  ];

  private isSubmittingSubject = new BehaviorSubject<boolean>(false);
  public isSubmitting$ = this.isSubmittingSubject.asObservable();

  getReasons() {
    return this.reasonList;
  }

  async sendReport(data: { itemId: string, itemType: string, reason: string, reasonText: string }): Promise<any> {
    this.isSubmittingSubject.next(true);

    try {
      const response = await axios.post('/api/report', data, {
        headers: {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + localStorage.getItem('token')
        }
      });

      this.isSubmittingSubject.next(false);
      return response;
    } catch (error) {
      this.isSubmittingSubject.next(false);
      throw error;
    }
  }
}